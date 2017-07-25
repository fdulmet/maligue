<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminNewLigueCreated extends Notification
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
            ->subject('Nouvelle ligue sur maligue.fr')
            ->line('Une nouvelle ligue viens d\'être créée sur maligue.fr')
            ->line('Nom de la ligue : ' . $this->ligueName)
            ->line('Email de l\'utilisateur : ' . $this->userEmail);
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