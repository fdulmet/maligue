<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Invitation;

class InvitationNotification extends Notification
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
        $date = date("Y-m-d H:i:s");
        \Storage::append('file.log', "{$date} NOTIFICATION");
        $invitation = $this->invitation;
        \Storage::append('file.log', json_encode($invitation));
        $mail = new MailMessage;
        if ($invitation->team) {
          $mail->subject('[maligue.fr] - Invitation à rejoindre une équipe')
          ->line($invitation->fromUser->first_name . ' ' . $invitation->fromUser->last_name . ' vous invite à rejoindre une équipe.')
          ->line('Equipe : ' . $invitation->team->name)
          ->line('Ligue : ' . $invitation->team->leagues[0]->name)
          ->line('Sport : ' . $invitation->team->leagues[0]->sport);
        } else {
          $mail->subject('[maligue.fr] - Invitation à créer une équipe')
          ->line($invitation->fromUser->first_name . ' ' . $invitation->fromUser->last_name . ' vous invite à créer une nouvelle équipe.')
          ->line('Ligue : ' . $invitation->league->name)
          ->line('Sport : ' . $invitation->league->sport);

        }
        $mail->action('S\'inscrire', route('invitation.confirm', ['token' => $invitation->token]));
        return $mail;
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
