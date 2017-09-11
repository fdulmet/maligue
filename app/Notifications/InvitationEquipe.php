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
        $sport,
        $equipe_slug,
        $ligue_slug
    ) {
        $this->mailDatas = [
            'invitationType' => $invitationType,
            'inviteurPrenom' => $inviteurPrenom,
            'inviteurNom' => $inviteurNom,
            'equipe' => $equipe,
            'ligue' => $ligue,
            'sport' => $sport,
            'equipe_slug' => $equipe_slug,
            'ligue_slug' => $ligue_slug,
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
                    ->action('Créer une nouvelle équipe', url('/rejoindre?ligue=' . $this->mailDatas['ligue_slug']));
                break;

            // Rejoindre une equipe
            case 'join_team':
                return (new MailMessage)
                    ->subject('[maligue.fr] - Invitation à rejoindre l\'équipe de ' . $this->mailDatas['inviteurPrenom'] . ' ' . $this->mailDatas['inviteurNom'])
                    ->line($this->mailDatas['inviteurPrenom'] . ' ' . $this->mailDatas['inviteurNom'] . ' vous invite à rejoindre son équipe.')
                    ->line('Ligue : ' . $this->mailDatas['ligue'])
                    ->line('Equipe : ' . $this->mailDatas['equipe'])
                    ->line('Sport : ' . $this->mailDatas['sport'])
                    ->action('Rejoindre l\'équipe', url('/rejoindre?ligue=' . $this->mailDatas['ligue_slug'] . '&equipe='. $this->mailDatas['equipe_slug']));
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
