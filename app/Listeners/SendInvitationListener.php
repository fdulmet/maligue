<?php

namespace App\Listeners;

use App\Events\InvitationCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;
use App\Notifications\InvitationNotification;

class SendInvitationListener implements ShouldQueue
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
        \Storage::append('file.log', "{$date} LISTENER");
        \Storage::append('file.log', "{$date} {$event->invitation->email}");
        try {
          Notification::route('mail', $event->invitation->email)
            ->notify(new InvitationNotification($event->invitation));
        } catch(\Exception $e) {
          \Storage::append('file.log', $e);
        }
    }
}
