<?php

namespace App\Http\Controllers;

// La base
use Illuminate\Http\Request;

// Les notifs
use Illuminate\Notifications\Notifiable;
use App\Notifications\MaLigueAdminNewUserMail;
use App\Notifications\MaLigueUserWelcomeMail;

// Les models
use App\Ligue;
use App\User;
use App\Equipe;

class LigueController extends Controller
{
	use Notifiable;

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
  public function ajouter()
  {
    return view('ligue.ajouter');
  }

  /**
   * [add description]
   * @param Request $request [description]
   */
  public function add(Request $request)
  {
  	$inputs = $request->all();

  	// Pour remplir la table users
  	$user = User::create([
  	    'nom' => $inputs['nom'],
  	    'prenom' => $inputs['prenom'],
  	    'email' => $inputs['email'],
  	    'tel' => $inputs['tel'],
  	    'password' => bcrypt($inputs['password']),
  	    'is_capitaine' => TRUE,
  	]);

  	// Creer l'equipe
  	$equipe = Equipe::create([
  		'nom'=>$inputs['equipe']
  	]);

  	// rattacher l'équipe au user
  	$user->equipes()->attach([$equipe->id]);

  	// Créer la ligue
  	$ligue = Ligue::create([
  		'nom' => $inputs['ligue'],
  		'sport' => 'Foot-à-5'
  	]);

  	// rattacher la ligue à l'équipe
  	$equipe->ligues()->attach([$ligue->id]);

  	// Envoi de mail à l'admin du site
  	$this->notify(new MaLigueAdminNewUserMail($user, $ligue));

  	// Envoi de mail au nouvel inscris
  	$this->notify(new MaLigueUserWelcomeMail($user));

  	return redirect('/');
  }
}
