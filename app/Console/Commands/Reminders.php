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
            $teams = $game->equipes()->get();
            $team1 = $teams->first();
            $team2 = $teams->last();

            if (is_null($team1->pivot->buts))
            {
                $gamesWithoutScore[] = [
                    'team1' => $team1->nom,
                    'team1captainId' => $team1->user_id,
                    'team2' => $team2->nom,
                    'team2captainId' => $team2->user_id,
                    'date' => $game->date,
                    'heure' => $game->heure,
                ];
            }
        }

        foreach ($gamesWithoutScore as $game)
        {
            // Send first mail
            $captain1 = User::find($game['team1captainId'])->first();
            $captain2 = User::find($game['team2captainId'])->first();

            switch ($type)
            {
                case 'goal':
                    // Mail to the first captain
                    Mail::to('bj.delorme@gmail.com')->send(new ReminderGoal($captain1->prenom, $game['team1'], $game['team2'], $game['date'], $game['heure']));

                    // Mail to the second captain
                    Mail::to('bj.delorme@gmail.com')->send(new ReminderGoal($captain2->prenom, $game['team1'], $game['team2'], $game['date'], $game['heure']));
                    break;

                case 'match':
                    // Mail to the first captain
                    Mail::to($captain1->email)->send(new ReminderMatch());

                    // Mail to the second captain
                    Mail::to($captain2->email)->send(new ReminderMatch());
                    break;
            }
        }

        $this->info('Emails sent.');

        return true;
    }
}
