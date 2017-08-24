<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Equipe;
use Illuminate\Support\Facades\Auth;

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
}
