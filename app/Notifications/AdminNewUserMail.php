<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminNewUserMail extends Notification
{
    use Queueable;

    private $userEmail = '';
    private $ligueName = '';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($newUserMail, $ligueName)
    {
        $this->userEmail = $newUserMail;
        $this->ligueName = $ligueName;
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
        return (new MailMessage)
            ->subject('Nouvel Utilisateur sur maligue.fr')
            ->line('Un nouvel utilisateur s\'est inscrit sur maligue.fr')
            ->line('Email de l\'utilisateur : ' . $this->userEmail)
            ->line('Nom de la ligue : ' . $this->ligueName);
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
