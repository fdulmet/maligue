<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Request as FormRequest;
use Mail;
use App\User;
use Form;


class InviterAmisDansEquipeController extends Controller
{
    public function send(Request $request){

        //$contenu = $request->input('contenu');

        Mail::send('emails.inviterAmisDansEquipe', [null], function ($message)
            //Mail::send('emails.inviterAmisDansEquipe', ['titre' => $titre, 'content' => $content], function ($message)
        {
            $emailInviteur = Auth::user()->email;
            $emailInvite1 = FormRequest::input('emailInvite1');
            $emailInvite2 = FormRequest::input('emailInvite2');
            //$emailInvites = array ("$emailInvite1, $emailInvite2");

            $message->subject('Invitation à jouer au foot');
            $message->from($emailInviteur);
            $message->to($emailInvite1);
            $message->to($emailInvite2);
            //$message->attach($attach);

        });

        return response()->view('invitationEnvoyee');
        //return response()->json(['message' => 'Request completed']);
    }
}
