<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Game;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

use App\Notifications\InvitationCreerEquipe;
use App\Notifications\InvitationBienEnvoyee;
use App\Notifications\InvitationRejoindreEquipe;

class InvitationController extends Controller
{
  public function creerEquipe(Request $request)
  {
  	//Equipe
  	$entreeEquipe = Auth::user()->equipes()->get();
  	foreach ($entreeEquipe as $equipe) {
  	    $equipe = $equipe->nom;
  	}
  	//Ligue
  	$ligue = Equipe::find($entreeEquipe)->ligues()->get();
  	foreach ($ligue as $ligue) {
  	    $ligue = $ligue->nom;
  	}
  	//Sport
  	$sport = Equipe::find($entreeEquipe)->ligues()->get();
  	foreach ($sport as $sport) {
  	    $sport = $sport->sport;
  	}

  	//Prénom et nom de l'inviteur
  	$inviteurPrenom = Auth::user()->prenom;
  	$inviteurNom = Auth::user()->nom;

  	//Calendrier
  	$game = Game::find(1);
  	$lieu = $game->lieu;

  	$emailInvite1 = $request->input('emailInvite1');
  	$emailsInvite1 = [$emailInvite1];

  	if( strpos($emailInvite1, ',') !== FALSE ) {
  	    $emailsInvite1 = explode(',', $emailInvite1);
  	}

  	foreach ($emailsInvite1 as $key => $emailInvite1) {
  		$user = new User();
  		$user->email = $emailInvite1;
  		Notification::send(
  			$user, new InvitationCreerEquipe(
  				$inviteurPrenom, $inviteurNom,
  				$ligue, $sport, $lieu
  			)
  		);
  	}

  	Notification::send(
			Auth::user(), new InvitationBienEnvoyee(
				$request->input('emailInvite1'), $ligue
			)
		);

  	// Message confirmation dans espace équipe
  	$emailInvite1 = $request->input('emailInvite1');
  	$entreeEquipe = Auth::user()->equipes()->get();
  	$ligue = Equipe::find($entreeEquipe)->ligues()->get();
  	foreach ($ligue as $ligue) {
  	    $ligue = $ligue->nom;
  	}
  	$deuxiemePhrase = '<br>Un email de confirmation vous a été envoyé';
  	$invitationEnvoyee = 'Vous avez bien invité '.$emailInvite1.' à créer une nouvelle équipe dans '.$ligue.'.'.$deuxiemePhrase.'.';

  	// Message de succes d'envois de mail
  	flash($invitationEnvoyee)
  	    ->success();

  	// redirect Home
  	return redirect()
  	    ->route('home');
  }

  public function rejoindreEquipe(Request $request)
  {
  	//$contenu = $request->input('contenu');

  	//Equipe
  	$entreeEquipe = Auth::user()->equipes()->get();
  	foreach ($entreeEquipe as $equipe) {
  	    $equipe = $equipe->nom;
  	}
  	// Ligue
  	$ligue = Equipe::find($entreeEquipe)->ligues()->get();
  	foreach ($ligue as $ligue) {
  	    $ligue = $ligue->nom;
  	}
  	// Sport
  	$sport = Equipe::find($entreeEquipe)->ligues()->get();
  	foreach ($sport as $sport) {
  	    $sport = $sport->sport;
  	}

  	//Prénom et nom de l'inviteur
  	$inviteurPrenom = Auth::user()->prenom;
  	$inviteurNom = Auth::user()->nom;

  	$emailInvite1 = $request->input('emailInvite1');
  	$emailsInvite1 = [];

  	$emailsInvite1[] = $emailInvite1;
  	if( strpos($emailInvite1, ',') !== FALSE ) {
  	    $emailsInvite1 = explode(',', $emailInvite1);
  	}

  	foreach ($emailsInvite1 as $key => $emailInvite1) {
  	  $user = new User();
  		$user->email = $emailInvite1;
  		Notification::send(
  			$user, new InvitationRejoindreEquipe(
  				$inviteurPrenom, $inviteurNom, $equipe,
  				$ligue, $sport
  			)
  		);
  	}

  	Notification::send(
			Auth::user(), new InvitationBienEnvoyee(
				$request->input('emailInvite1'), $equipe, TRUE
			)
		);

  	//Message confirmation dans espace équipe
  	$emailInvite1 = $request->input('emailInvite1');
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
  	$game = Game::find(1);
  	$lieu = $game->lieu;
  }
}
