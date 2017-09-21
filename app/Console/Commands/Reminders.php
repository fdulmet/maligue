<?php

namespace App\Console\Commands;

use App\Game;
use App\Mail\ReminderGoal;
use App\Mail\ReminderMatch;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Reminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a reminder email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $type = $this->argument('type');

        $now = \Carbon\Carbon::now()->format('Y-m-d');

        // Find all games played without score
        $games = Game::with('equipes')->where('date', '<', $now)->get();

        $gamesWithoutScore = [];
        foreach($games as $game)
        {
            if (is_null($game->equipes()->first()->buts))
            {
                $gamesWithoutScore[] = [
                    'team1' => $game->equipes()->first()->nom,
                    'team1captainId' => $game->equipes()->first()->user_id,
                    'team2' => $game->equipes()->latest()->nom,
                    'team2captainId' => $game->equipes()->latest()->user_id,
                    'date' => $game->date,
                    'heure' => $game->heure,
                ];
            }
        }

        dd($gamesWithoutScore);

        foreach ($gamesWithoutScore as $game)
        {
            // Send first mail
            $user = User::find($game['team1captainId'])->first();

            switch ($type)
            {
                case 'goal':
                    Mail::to($user->email)->send(new ReminderGoal($user->nom, $game['team1'], $game['team2'], $game['date'], $game['heure']));
                    break;

                case 'match':
                    Mail::to($user->email)->send(new ReminderMatch());
                    break;
            }
        }


        $username = 'Benjamin';
        $team1 = '';
        $team2 = '';
        $date = $now;

        switch ($type)
        {
            case 'goal':
                Mail::to('bj.delorme@gmail.com')->send(new ReminderGoal($username, $team1, $team2, $date));
                break;

            case 'match':
                Mail::to('bj.delorme@gmail.com')->send(new ReminderMatch());
                break;
        }

        $this->info('Emails sent.');
    }
}
