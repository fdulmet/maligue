<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReminderGoal extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The username
     *
     * @var String
     */
    protected $username;

    /**
     * The team 1
     *
     * @var String
     */
    protected $team1;

    /**
     * The team 2
     *
     * @var String
     */
    protected $team2;

    /**
     * Date
     *
     * @var Carbon
     */
    protected $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $team1, $team2, $date)
    {
        $this->username = $username;
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reminders.goal')
            ->with([
                'username' => $this->username,
                'team1' => $this->username,
                'team2' => $this->username,
                'date' => $this->date,
                'heure' => $this->date,
            ]);
    }
}
