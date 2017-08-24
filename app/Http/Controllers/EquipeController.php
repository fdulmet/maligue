<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Equipe;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class EquipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deactivate(Request $request)
    {
        $user = Auth::user();
        $equipeId = $request->get('id');

        if (!$user->isAdmin() && !$user->isAdminLigue())
        {
            abort(401, 'Vous n\'êtes pas autorisé à désactiver une équipe');
        }

        $equipe = Equipe::find($equipeId);

        if (!$equipe)
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        $equipe->delete();

        $request->session()->flash('deactivateEquipe', 'L\'équipe a bien été désactivée.');

        return redirect()->action('HomeController@index');
    }

    public function update(Request $request)
    {
        if (!$request->has('equipe') || !$request->has('joueur'))
        {
            $request->session()->flash('updateEquipe', 'Erreur, aucune équipe ou joueur sélectionné.');

            return redirect()->action('HomeController@index');
        }

        $equipe = Equipe::find(intval($request->input('equipe')));
        $joueur = User::find(intval($request->input('joueur')));

        $lastCapitaineId = $equipe->user_id;
        $lastCapitaine = User::find($lastCapitaineId);

        if (is_null($equipe))
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        if (is_null($joueur))
        {
            throw new ModelNotFoundException('User not found.');
        }

        $equipe->user_id = intval($request->input('joueur'));

        if (!$equipe->save())
        {
            throw new InternalErrorException('Unable to update the team.');
        }

        $joueur->roles()->attach(Role::CAPITAINE);
        $lastCapitaine->roles()->detach(Role::CAPITAINE);

        return redirect()->action('HomeController@index');
    }
}
