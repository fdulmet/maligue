<?php

namespace App\Http\Controllers\Invitations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Request as FormRequest;
use Mail;
use \App\User;
use \App\Equipe;
use \App\Game;
use App\Http\Controllers;
use Form;
use App\Http\Controllers\Controller;

class InviterAmisDansEquipeController extends Controller
{
    public function send(Request $request){
        //$contenu = $request->input('contenu');

        //Equipe
        $entreeEquipe = Auth::user()->equipes()->get();
        foreach ($entreeEquipe as $equipe) {
            $equipe = $equipe->nom;
        }
        // Ligue
        $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($ligue as $ligue) {
            $ligue = $ligue->nom;
        }
        // Sport
        $sport = \App\Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($sport as $sport) {
            $sport = $sport->sport;
        }

        //Prénom et nom de l'inviteur
        $inviteurPrenom = Auth::user()->prenom;
        $inviteurNom = Auth::user()->nom;

        $emailInvite1 = FormRequest::input('emailInvite1');
        $emailsInvite1 = [];

        $emailsInvite1[] = $emailInvite1;
        if( strpos($emailInvite1, ',') !== FALSE ) {
            $emailsInvite1 = explode(',', $emailInvite1);
        }

        foreach ($emailsInvite1 as $key => $emailInvite1) {
            Mail::send('emails.rejoindreEquipe.inviterAmisDansEquipe', ['inviteurPrenom'=>$inviteurPrenom, 'inviteurNom'=>$inviteurNom, 'equipe'=>$equipe, 'ligue'=>$ligue, 'sport'=>$sport,], function ($message) use ($emailInvite1)
            //Mail::send('emails.inviterAmisDansEquipe', ['titre' => $titre, 'content' => $content], function ($message)
            {
                //Titre email
                $debutPhrase = 'Invitation à rejoindre ';
                $entreeEquipe = Auth::user()->equipes()->get();
                foreach ($entreeEquipe as $equipe)
                {
                    $equipe = $equipe->nom;
                }
                $titre = $debutPhrase . $equipe;

                $message->subject($titre);

                //Adresses mail
                $emailInviteur = Auth::user()->email;

                $message->from($emailInviteur);
                $message->to($emailInvite1);
            });
        }

        Mail::send('emails.rejoindreEquipe.invitationBienEnvoyee', [null], function ($message)
        {
            $emailInviteur = Auth::user()->email;

            $message->subject('Invitation bien envoyée');
            $message->from($emailInviteur);
            $message->to($emailInviteur);
        });

        //Message confirmation dans espace équipe
        $emailInvite1 = FormRequest::input('emailInvite1');
        $teams = Auth::user()->equipes()->get();
        foreach ($teams as $team) {
            $equipeInviteur = $team->nom;
        }

        $deuxiemePhrase = 'Un email de confirmation vous a été envoyé';
        $invitationEnvoyee = 'Vous avez bien invité '.$emailInvite1.' à rejoindre '.$equipeInviteur.'.<br>'.$deuxiemePhrase.'.';

        // Message de succes d'envois de mail
        flash($invitationEnvoyee)
            ->success();

        // redirect Home
        return redirect()
            ->route('home');

        //Calendrier
        $game = \App\Game::find(1);
        $lieu = $game->lieu;
    }
}
