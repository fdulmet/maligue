<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegisterEvent;
use App\User;
use App\Invite;
use App\Equipe;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/LigueSMP';
    // protected function redirectTo()
    // {
    //     return '/smp';
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'ligue' => 'required|max:255',
            'equipe' => 'required|max:255',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $equipe         = \App\Equipe::where('nom', $data['equipe'])->first();
        $isCapitaine    = !isset($equipe);

        //Pour remplir la table users
        $user = User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_capitaine' => $isCapitaine,
        ]);

        // check si la personne est un invité
        // si oui on passe la variable à vrai
        $isInvited = Invite::where('email', $data['email']);
        if( $isInvited->count() != 0 ) {
            $isInvited->update([
                'is_registered' => TRUE
            ]);
        }

        //Pour remplir les tables equipe_user et equipes
        if (isset($equipe)) {
            $user->equipes()->save($equipe);
        }
        else {
            $user->equipes()->save(new \App\Equipe(['nom' => $data['equipe']]));
        }
        $equipe = $user->equipes()->where('nom', $data['equipe'])->get();
        $ligue  = new \App\Ligue(['nom' => $data['ligue'], 'sport' => 'Foot-à-5']);
        $ligue->save();
//        $equipe->ligues()->attach($ligue->id);
//        $equipe->save();

        return $user;


        //Pour remplir les tables equipe_ligue et ligues
        /*$user->equipes()->save( new \App\Equipe(['nom' => $data['id']]) );
        $equipe = Equipe::;
        $equipe->ligues()->save( new \App\Ligue(['nom' => $data['ligue']]) );
        return $equipe;*/
    }
}
//event(new RegisterEvent($user));
//...?
