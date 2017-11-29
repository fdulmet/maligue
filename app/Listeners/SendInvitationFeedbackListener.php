<?php

namespace App\Listeners;

use App\Events\InvitationAcceptedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;
use App\Notifications\InvitationAcceptedNotification;

class SendInvitationFeedbackListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InvitationAcceptedEvent  $event
     * @return void
     */
    public function handle(InvitationAcceptedEvent $event)
    {
      $date = date("Y-m-d H:i:s");
      try {
        $user = $event->invitation->fromUser;
        $user->notify(new InvitationAcceptedNotification($event->invitedUser));
      } catch(\Exception $e) {
        \Storage::append('file.log', $e);
      }
    }
}
