<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Game;
use App\Team;

class RemindSetScoreNotification extends Notification
{
    use Queueable;
    public $game;
    public $myTeam;
    public $otherTeam;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Game $game, Team $myTeam, Team $otherTeam)
    {
        $this->game = $game;
        $this->myTeam = $myTeam;
        $this->otherTeam = $otherTeam;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $game = $this->game;
        $myTeam = $this->myTeam;
        $otherTeam = $this->otherTeam;
        $when = new \Carbon\Carbon ($game->when);
        return (new MailMessage)
          ->subject('[maligue.fr] - Un score n’a pas encore été entré')
          ->line("Votre équipe {$myTeam->name} a rencontré {$otherTeam->name} le {$when->format('d/m/Y à G:i')}")
          ->line("Pour le moment, aucune des deux équipes n'a rentré le score de ce match")
          ->action('Entrer le score', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
