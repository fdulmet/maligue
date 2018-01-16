<?php

namespace App\Listeners;

use App\Events\InvitationCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\InvitationSentNotification;

class SendInvitationConfirmationListener implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle(InvitationCreatedEvent $event)
    {
      $date = date("Y-m-d H:i:s");
        try {
          $user = $event->invitation->fromUser;
          $user->notify(new InvitationSentNotification($event->invitation));
        } catch(\Exception $e) {
          \Log::info($e->getMessage());
        }
    }
}
