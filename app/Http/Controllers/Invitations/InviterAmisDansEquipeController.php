<?php

namespace App\Http\Controllers\Invitations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Request as FormRequest;
use Mail;
use \App\User;
use Form;
use App\Http\Controllers\Controller;

class InviterAmisDansEquipeController extends Controller
{
    public function send(Request $request){

        //$contenu = $request->input('contenu');

        Mail::send('emails.InviterAmisDansEquipe', [null], function ($message)
            //Mail::send('emails.inviterAmisDansEquipe', ['titre' => $titre, 'content' => $content], function ($message)
        {
            $emailInviteur = Auth::user()->email;
            $emailInvite1 = FormRequest::input('emailInvite1');
            //$emailInvite2 = FormRequest::input('emailInvite2');
            //$emailInvites = array ("$emailInvite1, $emailInvite2");
            $debutPhrase = 'Invitation à rejoindre ';
            $equipes = Auth::user()->equipes()->get();
            foreach ($equipes as $equipe) {
                $equipe = $equipe->nom;
            }

            $titre = $debutPhrase . $equipe ;

            $message->subject($titre);
            $message->from($emailInviteur);
            $message->to($emailInvite1);
            //$message->to($emailInvite2);
            //$message->attach($attach);

        });

        Mail::send('emails.InvitationBienEnvoyee', [null], function ($message)
        {
            $emailInviteur = Auth::user()->email;

            $message->subject('Invitation bien envoyée');
            $message->from($emailInviteur);
            $message->to($emailInviteur);
        });

        $emailInvite1 = FormRequest::input('emailInvite1');
        $teams = Auth::user()->equipes()->get();
            foreach ($teams as $team) {
                $equipeInviteur = $team->nom;
            }
        $deuxiemePhrase = '<br>Un email de confirmation vous a été envoyé';

        $invitationEnvoyee = 'Vous avez bien invité '.$emailInvite1.' à rejoindre '.$equipeInviteur.'.'.$deuxiemePhrase.'.';
        return response()->view('home', ['confirmation' => $invitationEnvoyee]);
        //return response()->json(['message' => 'Request completed']);
    }
}
