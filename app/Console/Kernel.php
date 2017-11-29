<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\RemindGameCommand;
use App\Console\Commands\RemindSetScoreCommand;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        RemindGameCommand::class,
        RemindSetScoreCommand::class,
    ];

    protected function scheduleRunsHourly(Schedule $schedule)
    {
        foreach ($schedule->events() as $event) {
                $event->expression = substr_replace($event->expression, '*', 0, 1);
        }
    }

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('invitation:cleanup')->daily();
        $schedule->command('remind:score')->daily();
        $schedule->command('remind:game')->daily();
        $schedule->command('queue:restart')->hourly();
        $schedule->command('queue:work --tries=3 --sleep=10')->hourly()->withoutOverlapping();
        $this->scheduleRunsHourly($schedule);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
