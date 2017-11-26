<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Invitation;

class InvitationSentNotification extends Notification
{
    use Queueable;
    public $invitation;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Invitation $invitation)
    {
        $this->invitation = $invitation;
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
        $message = new MailMessage;
        $message->subject('[maligue.fr] - Invitation bien envoyée');
        if ($this->invitation->team) {
          $message->line('Vous avez bien invité ' . $this->invitation->email . ' à rejoindre votre équipe ' . $this->invitation->team->name);
        } else {
          $message->line('Vous avez bien invité ' . $this->invitation->email . ' à créer une nouvelle équipe dans la ligue ' . $this->invitation->league->name);
        }
        return $message;
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
