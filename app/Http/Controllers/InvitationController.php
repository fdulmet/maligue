<?php

namespace App\Http\Controllers;

use App\Events\InviteNewPersons;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class InvitationController extends Controller
{
  public function creerEquipe(Request $request)
  {
  	// On lance l'évènement
  	// d'invitation de personnes
  	// qui va dans l'ordre
  	// 1. Envoyer un mail à l'invité
  	// 2. Envoyer un mail à l'inviteur
  	// 3. Insérer le mail de la personne invité
  	//    dans la table invitees
  	event(
  		new InviteNewPersons(
  			'create_team',
  			$request->input('emails_create_team')
  		)
  	);

  	// redirect Home
  	return redirect()
  	    ->route('home');
  }

  public function rejoindreEquipe(Request $request)
  {
  	// On lance l'évènement
  	// d'invitation de personnes
  	// qui va dans l'ordre
  	// 1. Envoyer un mail à l'invité
  	// 2. Envoyer un mail à l'inviteur
  	// 3. Insérer le mail de la personne invité
  	//    dans la table invitees
  	event(
  		new InviteNewPersons(
  			'join_team',
  			$request->input('emails_join_team')
  		)
  	);

  	// redirect Home
  	return redirect()
  	    ->route('home');
  }
}
