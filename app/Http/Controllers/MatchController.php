<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Game;

class MatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {
        $input = $request->all();

        $game = Game::find(intval($input['game_id']));

        if (!$game)
        {
            throw new ModelNotFoundException('Game not found.');
        }

        foreach ($game->equipes as $equipe)
        {
            $equipe->pivot->buts = $input['buts_'. $equipe->id];
            $equipe->pivot->save();
        }

        flash('Merci d\'avoir rentrer le score du match.')->success();

        return redirect()->action('HomeController@index');
    }
}
