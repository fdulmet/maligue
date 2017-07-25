<?php

namespace App\Listeners;

use App\Events\InviteNewPersons;
use App\Notifications\InvitationEquipe;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendEmailToNewPersons
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
        // @todo same system in InsertEmailInvitesTable
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

        // on boucle sur les emails
        foreach ($emailInvites as $key => $emailInvite) {
            $user = new User();
            $user->email = trim( $emailInvite );

            // On envois le mail d'invitation
            Notification::send(
                $user, new InvitationEquipe(
                    $event->invitationType,
                    $event->currentUser->prenom,
                    $event->currentUser->nom,
                    $event->equipe,
                    $event->ligue,
                    $event->sport
                )
            );
        }

        // On check le type d'invitation
        // pour renvoyer le message d'invitation réussis
        // sur le site
        switch ($event->invitationType) {
            // créer une equipe
            case 'create_team':

                // Message de succes d'envois de mail
                flash('Vous avez bien invité '.$event->newPersonInputEmails.' à créer une nouvelle équipe dans '.$event->ligue.'.<br>Un email de confirmation vous a été envoyé.')
                    ->success();

                break;

            // rejoindre une equipe
            case 'join_team':

                // Message de succes d'envois de mail
                flash('Vous avez bien invité '.$event->newPersonInputEmails.' à rejoindre '.$event->equipe.'.<br>Un email de confirmation vous a été envoyé.')
                    ->success();

                break;

            default:
                # code...
                break;
        }
    }
}