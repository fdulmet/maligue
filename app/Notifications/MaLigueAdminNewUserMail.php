<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MaLigueAdminNewUserMail extends Notification
{
    use Queueable;

    private $userEmail = '';
    private $ligueName = '';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $ligue)
    {
        $this->userEmail = $user->mail;
        $this->ligueName = $ligue->nom;
        // mail de l'admin
        $this->email = 'fdulmet@gmail.com';
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
            ->line('Une nouvelle ligue a été créé sur maligue.fr')
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
