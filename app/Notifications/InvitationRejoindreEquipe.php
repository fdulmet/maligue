<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InvitationRejoindreEquipe extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($inviteurPrenom, $inviteurNom, $equipe, $ligue, $sport)
    {
        $this->mailDatas = [
            'inviteurPrenom' => $inviteurPrenom,
            'inviteurNom' => $inviteurNom,
            'equipe' => $equipe,
            'ligue' => $ligue,
            'sport' => $sport
        ];
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
            ->subject('[maligue.fr] - Invitation à rejoindre une équipe')
            ->line($this->mailDatas['inviteurPrenom'] . ' ' . $this->mailDatas['inviteurNom'] . ' vous invite à créer une nouvelle équipe.')
            ->line('Equipe : ' . $this->mailDatas['equipe'])
            ->line('Ligue : ' . $this->mailDatas['ligue'])
            ->line('Sport : ' . $this->mailDatas['sport'])
            ->action('S\'inscrire', url('/register?ligue=' . $this->mailDatas['ligue'] . '&equipe='. $this->mailDatas['equipe']));
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
