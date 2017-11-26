<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Team;
use App\Game;

class RemindGameNotification extends Notification
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
                    ->subject('[maligue.fr] - Votre équipe a un match demain')
                    ->line("Votre équipe {$myTeam->name} rencontre {$otherTeam->name} demain")
                    ->line("Lieu : {$game->place}")
                    ->line("Terrain : {$game->field}")
                    ->line("Début du match : {$when->format('d/m/Y à G:i')}")
                    ->action('Voir sur Ma Ligue', url('/'));
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
