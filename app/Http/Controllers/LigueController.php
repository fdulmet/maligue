<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Invite;
use App\Ligue;
use App\Notifications\AdminNewLigueCreated;
use App\Notifications\AdminNewUserMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class LigueController extends Controller
{
	public function __construct()
	{
	    $this->middleware('guest');
	}

  /**
   * [ligue description]
   * @param  [type] $idLigue [description]
   * @return [type]          [description]
   */
  public function index($idLigue)
  {
      $ligue = Ligue::find($idLigue);
  }

  /**
   * Créer une ligue
   *
   * @return view()
   */
  public function ajouter(Request $request)
  {
    return view('ligue.ajouter', $request->all());
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
      return Validator::make($data, [
          // 'ligue' => 'required|max:255',
          // 'equipe' => 'required|max:255',
          'nom' => 'required|max:255',
          'prenom' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed',
      ]);
  }

  /**
   * [add description]
   * @param Request $request [description]
   */
  public function add(Request $request)
  {
  	$inputs = $request->all();

    // Validation back
    $validator = $this->validator($inputs);
    if ( $validator->fails() ) {
      return redirect()
        ->back()
        ->withErrors(
          $validator->errors()
        );
    }

  	// Pour remplir la table users
  	$user = User::create([
  	    'nom' => $inputs['nom'],
  	    'prenom' => $inputs['prenom'],
  	    'email' => $inputs['email'],
  	    'tel' => $inputs['tel'],
  	    'password' => bcrypt($inputs['password']),
  	    'is_capitaine' => TRUE,
  	]);

    // check si la personne est un invité
    // si oui on passe la variable à vrai
    $isInvited = Invite::where('email', $inputs['email']);
    if( $isInvited->count() != 0 ) {
        $isInvited->update([
            'is_registered' => TRUE
        ]);
    }

  	// l equipe existe on recupere l'equipe existante
    if( ! isset($inputs['equipe']) ) {
      $equipe = Equipe::where('nom', $inputs['hidden_equipe'])->first();
    }
    // Creer l'equipe
    else {
      $equipe = Equipe::create([
        'nom'=> ucfirst ( $inputs['equipe'] ),
        'user_id' => $user->id
      ]);
    }

  	// rattacher l'équipe au user
  	$user->equipes()->attach([$equipe->id]);

  	// la ligue existe on recupere la ligue existante
    if( ! isset($inputs['ligue']) ) {
      $ligue = Ligue::where('nom', $inputs['hidden_ligue'])->first();
    }
    // Créer la ligue
    else {
      $ligue = Ligue::create([
        'nom' => ucfirst ( $inputs['ligue'] ),
        'sport' => 'Foot-à-5'
      ]);
      // envoi mail de creation
      // de nouvelle ligue
      $admin = User::find(2);
      Notification::send($admin,
        new AdminNewLigueCreated($user->email, $ligue->nom)
      );
    }

  	// rattacher la ligue à l'équipe
  	$equipe->ligues()->attach([$ligue->id]);

  	// envoyer le mail de bienvenu
  	$user->sendWelcomeMail();

  	// envoyer le mail
    // de création de compte
    // à l'admin
  	$admin = User::find(2);
    Notification::send($admin,
      new AdminNewUserMail($user->email, $ligue->nom)
    );

    // Message de l'appli
  	flash('Bienvenu sur maligue.fr - Un email de bienvenu vous a été envoyé')
  		->success();

    // Forcer la connexion de l'utilisateur
    Auth::login($user);

    // Rediriger vers la home
  	return redirect('/');
  }
}
