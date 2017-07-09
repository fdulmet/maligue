<?php

namespace App\Listeners;

use App\Events\InviteNewPersons;
use App\Notifications\InvitationBienEnvoyee;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendEmailToInviter
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
     * @param  InviteNewPersons  $event
     * @return void
     */
    public function handle(InviteNewPersons $event)
    {
        Notification::send(
            $event->currentUser, new InvitationBienEnvoyee(
                $event->invitationType,
                $event->newPersonInputEmails,
                $event->ligue
            )
        );
    }
}
