<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Models
use App\Equipe;
use App\Game;

use Mail;

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
  	$game = App\Game::find(1);
  	$lieu = $game->lieu;

  	$emailInvite1 = $request->input('emailInvite1');
  	$emailsInvite1 = [];

  	$emailsInvite1[] = $emailInvite1;
  	if( strpos($emailInvite1, ',') !== FALSE ) {
  	    $emailsInvite1 = explode(',', $emailInvite1);
  	}

  	foreach ($emailsInvite1 as $key => $emailInvite1) {
  	    Mail::send('emails.creerEquipe.inviterAmiACreerEquipe', ['inviteurPrenom'=>$inviteurPrenom, 'inviteurNom'=>$inviteurNom, 'ligue'=>$ligue, 'sport'=>$sport, 'lieu'=>$lieu, ], function ($message) use ($emailInvite1)
  	    {
  	        //Titre email
  	        $titre = 'Invitation à créer une équipe';
  	        /*$entreeEquipe = Auth::user()->equipes()->get();
  	        $ligue = Equipe::find($entreeEquipe)->ligues()->get();
  	        foreach ($ligue as $ligue) {
  	            $ligue = $ligue->nom;
  	        }
  	        $titre = $debutPhrase . $ligue;*/

  	        //Adresses mail
  	        $emailInviteur = Auth::user()->email;

  	        $message->subject($titre);
  	        $message->from($emailInviteur);
  	        $message->to($emailInvite1);
  	    });
  	}

  	Mail::send('emails.creerEquipe.invitationBienEnvoyee', [null], function ($message)
  	{
  	    $emailInviteur = Auth::user()->email;

  	    $message->subject('Invitation bien envoyée');
  	    $message->from($emailInviteur);
  	    $message->to($emailInviteur);
  	});

  	//Message confirmation dans espace équipe
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
  	$game = App\Game::find(1);
  	$lieu = $game->lieu;
  }
}
