<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class EntrerScoreController extends Controller
{
    public function entrerscore(Request $request){

        $input = $request->all(); //12:59 de https://laracasts.com/series/laravel-5-fundamentals/episodes/10
        //dd($input);

        $game = Game::find($input['game_id']);
        foreach($game->equipes as $equipe) {
            $equipe->pivot->buts = $input['buts_'. $equipe->id];
            $equipe->pivot->save();
        }

        return redirect()->action('HomeController@index');
    }
}
