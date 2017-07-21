<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InvitationEquipe extends Notification
{
    use Queueable;

    public $mailDatas = [];

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        $invitationType,
        $inviteurPrenom,
        $inviteurNom,
        $equipe,
        $ligue,
        $sport
    ) {
        $this->mailDatas = [
            'invitationType' => $invitationType,
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
        switch ($this->mailDatas['invitationType']) {

            // Créer une equipe
            case 'create_team':
                return (new MailMessage)
                    ->subject('[maligue.fr] - Invitation à créer une équipe')
                    ->line($this->mailDatas['inviteurPrenom'] . ' ' . $this->mailDatas['inviteurNom'] . ' vous invite à créer une nouvelle équipe.')
                    ->line('Ligue : ' . $this->mailDatas['ligue'])
                    ->line('Sport : ' . $this->mailDatas['sport'])
                    ->action('S\'inscrire', url('/inscription?ligue=' . $this->mailDatas['ligue']));
                break;

            // Rejoindre une equipe
            case 'join_team':
                return (new MailMessage)
                    ->subject('[maligue.fr] - Invitation à rejoindre une équipe')
                    ->line($this->mailDatas['inviteurPrenom'] . ' ' . $this->mailDatas['inviteurNom'] . ' vous invite à rejoindre une nouvelle équipe.')
                    ->line('Ligue : ' . $this->mailDatas['ligue'])
                    ->line('Equipe : ' . $this->mailDatas['equipe'])
                    ->line('Sport : ' . $this->mailDatas['sport'])
                    ->action('S\'inscrire', url('/inscription?ligue=' . $this->mailDatas['ligue'] . '&equipe='. $this->mailDatas['equipe']));
                break;

            default:
                # code...
                break;
        }
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
