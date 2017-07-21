<?php

namespace App\Listeners;

use App\Invite;
use App\Events\InviteNewPersons;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsertEmailInInvitesTable
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
        // @todo same system in SendEmailToNewPersonListener
        // On met les emails ou l'email
        // des / de l'invité(s)
        // dans un tableau
        // pour boucler dessus et envoyer les mails
        $emailInvites = [$event->newPersonInputEmails];

        // on vérifie si il
        // y a plusieurs emails
        if( strpos($event->newPersonInputEmails, ',') !== FALSE ) {
            $emailInvites = explode(',', $event->newPersonInputEmails);
        }
        foreach ($emailInvites as $emailInvite) {
            Invite::create([
                'email' => trim( $emailInvite ),
                'is_registered' => FALSE,
                'invitation_type' => $event->invitationType
            ]);
        }
    }
}
