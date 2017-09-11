<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Invite;
use App\Ligue;
use App\Notifications\AdminNewLigueCreated;
use App\Notifications\AdminNewUserMail;
use App\Http\Requests\RegisterLigueRequest;
use App\Role;
use App\Season;
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
      $ligue = null;
      $equipe = null;

      if ($request->has('ligue'))
      {
          $ligue = Ligue::findBySlug($request->get('ligue'));

          if (!$ligue)
          {
              throw new ModelNotFoundException('Ligue not found.');
          }
      }
      else
      {
          flash('La ligue dans laquelle un utilisateur vous a ajouté n\'existe pas.')->error();

          return redirect('/');
      }

      if ($request->has('equipe') && !empty($request->get('equipe')))
      {
          $equipe = Equipe::findBySlug($request->get('equipe'));

          if (!$equipe)
          {
              throw new ModelNotFoundException('Equipe not found.');
          }
      }

      $saison = $ligue->seasons()->first();

      return view('ligue.ajouter', [
          'ligue'  => $ligue,
          'equipe' => $equipe,
          'saison' => $saison,
      ]);
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
  public function add(RegisterLigueRequest $request)
  {
  	$inputs = $request->all();

    // Validation back
    $validator = $this->validator($inputs);
    if ($validator->fails())
    {
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
  	]);

    // check si la personne est un invité
    // si oui on passe la variable à vrai
    $isInvited = Invite::where('email', $inputs['email']);
    if ($isInvited->count() != 0)
    {
        $isInvited->update([
            'is_registered' => true
        ]);
    }

  	// l equipe existe on recupere l'equipe existante
    if (!isset($inputs['equipe']))
    {
      $equipe = Equipe::where('nom', $inputs['hidden_equipe'])->first();
        $user->roles()->attach([Role::JOUEUR]);
    }
    // creer l'equipe
    else
    {
      $equipe = Equipe::create([
        'nom' => ucfirst($inputs['equipe']),
        'user_id' => $user->id
      ]);
        $user->roles()->attach([Role::CAPITAINE]);
    }


  	// rattacher l'équipe au user
  	$user->equipes()->attach([$equipe->id]);

  	// la ligue existe on recupere la ligue existante
    if (!isset($inputs['ligue']))
    {
      $ligue = Ligue::where('nom', $inputs['hidden_ligue'])->first();
    }
    // Créer la ligue
    else
    {
      $ligue = Ligue::create([
        'nom' => ucfirst($inputs['ligue']),
        'sport' => 'Foot-à-5'
      ]);

      // envoi mail de creation
      // de nouvelle ligue
      // todo: refacto
      /*$admin = User::find(1);
      Notification::send($admin,
        new AdminNewLigueCreated($user->email, $ligue->nom)
      );*/
    }

  	// rattacher la ligue à l'équipe
  	$equipe->ligues()->attach([$ligue->id]);

      // la saison existe on recupere la saison existante
      if (!isset($inputs['saison']))
      {
          $saison = Season::where('nom', $inputs['hidden_saison'])->first();
      }
      // Créer la saison
      else
      {
          $saison = new Season();
          $saison->nom = $inputs['saison'];
      }

      $saison->ligue()->associate($ligue);
      $saison->save();


  	// envoyer le mail de bienvenu
  	$user->sendWelcomeMail();

  	// envoyer le mail
    // de création de compte
    // à l'admin
  	/*$admin = User::find(2);
    Notification::send($admin,
      new AdminNewUserMail($user->email, $ligue->nom)
    );*/

    // Message de l'appli
  	$request->session()->flash('welcome', 'Bienvenu sur maligue.fr - Un email de bienvenu vous a été envoyé');

    // Forcer la connexion de l'utilisateur
    Auth::login($user);

    // Rediriger vers la home
  	return redirect('/');
  }
}
