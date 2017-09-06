<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\SaveLogoRequest;
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

    public function store(CreateTeamRequest $request)
    {
        $user = Auth::user();
        $currentEquipe = $request->session()->get('currentEquipe');
        $currentLigue = $request->session()->get('currentLigue');
        $currentSaison = $request->session()->get('currentSaison');

        if (!$request->has('nom'))
        {
            flash('Erreur, vous devez renseigner un nom à l\'équipe`.')->error();

            return redirect()->action('HomeController@index');
        }

        $equipe = new Equipe();
        $equipe->nom = $request->input('nom');
        $equipe->user_id = $user->id;

        if ($request->hasFile('logo'))
        {
            $imageName = camel_case($equipe->nom) . '.' . $request->file('logo')->getClientOriginalExtension();

            $request->file('logo')->move(
                base_path() . '/public/images/logos/', $imageName
            );

            $equipe->logo = 'images/logos/' . $imageName;
        }

        if (!$equipe->save())
        {
            throw new InternalErrorException('Unable to create the team.');
        }

        $equipe->users()->attach($user->id);
        $equipe->ligues()->attach($currentLigue->id);

        flash('L\'équipe `'.$equipe->nom.'` a bien été créée.')->success();

        return redirect()->action('HomeController@index');
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

        flash('L\'équipe a bien été désactivée.')->success();

        return redirect()->action('HomeController@index');
    }

    public function updateCapitaine(Request $request)
    {
        if (!$request->has('equipe') || !$request->has('joueur'))
        {
            flash('Erreur, aucune équipe ou joueur sélectionné.')->error();

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

        $lastCapitaine->roles()->detach(Role::CAPITAINE);
        $joueur->roles()->attach(Role::CAPITAINE);

        return redirect()->action('HomeController@index');
    }

    public function updateName(Request $request)
    {
        if (!$request->has('equipe'))
        {
            flash('Erreur, aucune équipe sélectionné.')->error();

            return redirect()->action('HomeController@index');
        }

        $equipe = Equipe::find(intval($request->input('equipe')));

        if (is_null($equipe))
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        $equipe->nom = $request->input('nom');

        if (!$equipe->save())
        {
            throw new InternalErrorException('Unable to update the team.');
        }

        flash('Le nom de l\'équipe a bien été modifié.')->success();

        return redirect()->action('HomeController@index');
    }

    public function updateLogo(SaveLogoRequest $request)
    {
        if (!$request->has('equipe'))
        {
            flash('Erreur, aucune équipe sélectionné.')->error();

            return redirect()->action('HomeController@index');
        }

        if (!$request->hasFile('logo'))
        {
            flash('Erreur, aucune image sélectionnée.')->error();

            return redirect()->action('HomeController@index');
        }

        $equipe = Equipe::find(intval($request->input('equipe')));

        if (is_null($equipe))
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        $imageName = camel_case($equipe->nom) . '.' . $request->file('logo')->getClientOriginalExtension();

        $request->file('logo')->move(
            base_path() . '/public/images/logos/', $imageName
        );

        $equipe->logo = 'images/logos/' . $imageName;

        if (!$equipe->save())
        {
            throw new InternalErrorException('Unable to update the team.');
        }

        $request->session()->put('currentEquipe', $equipe);

        flash('Le logo de l\'équipe a bien été modifié.')->success();

        return redirect()->action('HomeController@index');
    }

    public function addPlayer(Request $request)
    {
        if (!$request->has('equipe') || !$request->has('joueur'))
        {
            flash('Erreur, aucune équipe ou joueur sélectionné.')->error();

            return redirect()->action('HomeController@index');
        }

        $equipe = Equipe::find(intval($request->input('equipe')));
        $joueur = User::find(intval($request->input('joueur')));

        if (is_null($equipe))
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        if (is_null($joueur))
        {
            throw new ModelNotFoundException('User not found.');
        }

        $joueur->equipes()->attach($equipe);

        flash('L\'utilisateur a bien été ajouté à l\'équipe.')->success();

        return redirect()->action('HomeController@index');
    }

    public function removePlayer(Request $request)
    {
        if (!$request->has('equipe') || !$request->has('joueur'))
        {
            flash('Erreur, aucune équipe ou joueur sélectionné.')->error();

            return redirect()->action('HomeController@index');
        }

        $equipe = Equipe::find(intval($request->get('equipe')));
        $joueur = User::find(intval($request->get('joueur')));

        if (is_null($equipe))
        {
            throw new ModelNotFoundException('Equipe not found.');
        }

        if (is_null($joueur))
        {
            throw new ModelNotFoundException('User not found.');
        }

        $joueur->equipes()->detach($equipe);

        flash('L\'utilisateur a bien été retiré de l\'équipe.')->success();

        return redirect()->action('HomeController@index');
    }
}
