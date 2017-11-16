<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class InvitationAcceptedNotification extends Notification
{
    use Queueable;
    public $invitedUser;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct(User $invitedUser)
     {
         $this->invitedUser = $invitedUser;
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
      $invitedUser = $this->invitedUser;
        return (new MailMessage)
          ->subject('[maligue.fr] - Invitation acceptée')
          ->line($invitedUser->first_name . ' ' . $invitedUser->last_name . ' a accepté votre invitation.')
          ->action('Le retrouver sur Ma Ligue', url('/'));
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
