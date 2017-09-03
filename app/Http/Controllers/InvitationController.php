<?php

namespace App\Http\Controllers;

use App\Events\InviteNewPersons;
use App\Http\Requests\InvitationRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class InvitationController extends Controller
{
  public function creerEquipe(InvitationRequest $request)
  {
  	// On lance l'évènement
  	// d'invitation de personnes
    // avec parametre => create_team
  	// qui va dans l'ordre
  	// 1. Envoyer un mail à l'invité
  	// 2. Envoyer un mail à l'inviteur
  	// 3. Insérer le mail de la personne invité
  	//    dans la table invitees

    $currentEquipe = $request->session()->get('currentEquipe');
    $currentLigue = $request->session()->get('currentLigue');

  	event(
  		new InviteNewPersons(
  			'create_team',
  			$request->input('emails'),
            [
                'currentEquipe' => $currentEquipe,
                'currentLigue' => $currentLigue,
            ]
  		)
  	);

  	// redirect Home
  	return redirect()
  	    ->route('home');
  }

  public function rejoindreEquipe(InvitationRequest $request)
  {
  	// On lance l'évènement
  	// d'invitation de personnes
    // avec parametre => join_team
  	// qui va dans l'ordre
  	// 1. Envoyer un mail à l'invité
  	// 2. Envoyer un mail à l'inviteur
  	// 3. Insérer le mail de la personne invité
  	//    dans la table invitees

    $currentEquipe = $request->session()->get('currentEquipe');
    $currentLigue = $request->session()->get('currentLigue');

  	event(
  		new InviteNewPersons(
  			'join_team',
  			$request->input('emails'),
            [
                'currentEquipe' => $currentEquipe,
                'currentLigue' => $currentLigue,
            ]
  		)
  	);

  	// redirect Home
  	return redirect()
  	    ->route('home');
  }
}
