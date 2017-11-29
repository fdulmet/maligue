<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Game;
use DB;
use Carbon\Carbon;
use App\Notifications\RemindSetScoreNotification;

class RemindSetScoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind:score';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder to fill game score';

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
        $games = Game::with('teams')
          ->whereDate('when', '=', DB::raw('CURDATE() - INTERVAL 1 DAY'))
          ->orWhereDate('when', '=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
          ->where('canceled', '=', false)
          ->get();

        foreach($games as $game) {
          if ($game->teams[0]->pivot->goals === null) {
            $team_1 = $game->teams[0];
            $team_2 = $game->teams[1];
            $team_1->captain->notify(new RemindSetScoreNotification($game, $team_1, $team_2));
            $team_2->captain->notify(new RemindSetScoreNotification($game, $team_2, $team_1));
          }
        }
    }
}
