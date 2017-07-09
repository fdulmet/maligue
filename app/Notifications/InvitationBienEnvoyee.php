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

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        $invitationType,
        $emailsSendTo,
        $joinName
    ) {
        $this->invitationType = $invitationType;
        $this->emailsSendTo = $emailsSendTo;
        $this->joinName = $joinName;
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
                    ->line('Vous avez bien invité ' . $this->emailsSendTo . ' à rejoindre : ' . $this->joinName)
                    ->line('Une fois l\'invitation acceptée, il apparaîtra dans l\'effectif.');
                break;

            case 'join_team':
                return (new MailMessage)
                    ->line('Vous avez bien invité ' . $this->emailsSendTo . ' à rejoindre : ' . $this->joinName);
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
