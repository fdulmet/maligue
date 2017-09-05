<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InvitationBienEnvoyee extends Notification
{
    use Queueable;

    public $emailsSendTo = '';
    public $joinName = '';
    public $invitationType;
    public $equipe;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        $invitationType,
        $emailsSendTo,
        $joinName,
        $equipe
    ) {
        $this->invitationType = $invitationType;
        $this->emailsSendTo = $emailsSendTo;
        $this->joinName = $joinName;
        $this->equipe = $equipe;
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
        switch ($this->invitationType) {
            case 'create_team':
                return (new MailMessage)
                    ->subject('[maligue.fr] - Invitation bien envoyée')
                    ->line('Vous avez bien invité ' . $this->emailsSendTo . ' à créer une nouvelle équipe dans la ligue ' . $this->joinName);
                break;

            case 'join_team':
                return (new MailMessage)
                    ->subject('[maligue.fr] - Invitation bien envoyée')
                    ->line('Vous avez bien invité ' . $this->emailsSendTo . ' à rejoindre votre équipe ' . $this->equipe)
                    ->line('Une fois l\'invitation acceptée, il apparaîtra dans l\'effectif.');
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
