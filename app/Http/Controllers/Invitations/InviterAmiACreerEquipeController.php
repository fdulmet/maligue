<?php

namespace App\Http\Controllers\Invitations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Request as FormRequest;
use Mail;
use \App\User;
use \App\Equipe;
use Form;
use App\Http\Controllers\Controller;

class InviterAmiACreerEquipeController extends Controller
{
    public function send(Request $request){

        //Equipe
        $entreeEquipe = Auth::user()->equipes()->get();
        foreach ($entreeEquipe as $equipe) {
            $equipe = $equipe->nom;
        }
        //Ligue
        $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($ligue as $ligue) {
            $ligue = $ligue->nom;
        }
        //Sport
        $sport = \App\Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($sport as $sport) {
            $sport = $sport->sport;
        }

        //Prénom et nom de l'inviteur
        $inviteurPrenom = Auth::user()->prenom;
        $inviteurNom = Auth::user()->nom;

        //Calendrier
        $game = \App\Game::find(1);
        $lieu = $game->lieu;


        Mail::send('emails.creerEquipe.inviterAmiACreerEquipe', ['inviteurPrenom'=>$inviteurPrenom, 'inviteurNom'=>$inviteurNom, 'ligue'=>$ligue, 'sport'=>$sport, 'lieu'=>$lieu, ], function ($message)
        {
            //Titre email
            $titre = 'Invitation à créer une équipe';
            /*$entreeEquipe = Auth::user()->equipes()->get();
            $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
            foreach ($ligue as $ligue) {
                $ligue = $ligue->nom;
            }
            $titre = $debutPhrase . $ligue;*/

            //Adresses mail
            $emailInviteur = Auth::user()->email;
            $emailInvite1 = FormRequest::input('emailInvite1');
            //$emailInvite2 = FormRequest::input('emailInvite2');
            //$emailInvites = array ("$emailInvite1, $emailInvite2");

            $message->subject($titre);
            $message->from($emailInviteur);
            $message->to($emailInvite1);
            //$message->to($emailInvite2);
            //$message->attach($attach);

        });

        Mail::send('emails.creerEquipe.invitationBienEnvoyee', [null], function ($message)
        {
            $emailInviteur = Auth::user()->email;

            $message->subject('Invitation bien envoyée');
            $message->from($emailInviteur);
            $message->to($emailInviteur);
        });

        //Message confirmation dans espace équipe
        $emailInvite1 = FormRequest::input('emailInvite1');
        $entreeEquipe = Auth::user()->equipes()->get();
        $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($ligue as $ligue) {
            $ligue = $ligue->nom;
        }
        $deuxiemePhrase = '<br>Un email de confirmation vous a été envoyé';
        $invitationEnvoyee = 'Vous avez bien invité '.$emailInvite1.' à créer une nouvelle équipe dans '.$ligue.'.'.$deuxiemePhrase.'.';
        //return response()->view('home', ['confirmation' => $invitationEnvoyee]);
        return redirect()->action('HomeController@index', ['confirmation' => $invitationEnvoyee]);
        //return response()->json(['message' => 'Request completed']);
    }
}
