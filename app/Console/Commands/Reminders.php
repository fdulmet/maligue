<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Notifications\Messages\MailMessage;
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

        Mail::to('bj.delorme@gmail.com')
            ->send((new MailMessage)
                ->subject('Maligue.fr - Reminder ' . $type)
                ->line('Vous avez un match prévu demain, ne l\'oubliez pas !')
                ->line('maligue.fr'));

        // User::find($this->argument('user'))

    }
}
