<?php

namespace App\Http\Controllers;

use App\Game;
use App\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //CALENDRIER
        //lieu
        $game = Game::find(1);
        $lieu = $game->lieu;

        $games = Game::all();
        $stats = [];// Array of games statistics

        $i = 0;
        foreach ($games as $game){
            $stats[$i] = [];

            //date
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $stats[$i]['date'] = $date;

            //heure
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));
            $stats[$i]['heure'] = $heure;

            //equipes & buts
            $y = 1;
            foreach ($game->equipes as $equipe){
                $pivot = $equipe->pivot;
                $buts = $pivot->buts;
                $nom = Equipe::find( $pivot->equipe_id )->nom;

                $stats[$i]['equipe_'. $y] = $nom;
                $stats[$i]['buts_'. $y] = $buts;

                $y++;
            }

            $i++;
        }

        //CLASSEMENT

        //VIEW
        return view('/home')->with([
            'lieu' => $lieu,
            'stats' => $stats,
            'confirmation' => $request->input('confirmation', null),
        ]);
    }
}