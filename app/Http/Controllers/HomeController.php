<?php

namespace App\Http\Controllers;

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

    public function index()
    {
        //CALENDRIER
        //lieu
        $game = \App\Game::find(1);
        $lieu = $game->lieu;

        $games = \App\Game::all();
        foreach ($games as $game){
            //date, heure
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));

            //équipe1 buts1
            foreach ($game->equipes as $game){
                $pivot = $game->pivot;
                $buts = $pivot->buts;
                $equipe_id = $pivot->equipe_id;
                $equipe = \App\Equipe::find($equipe_id)->nom;
            }
            $buts;
        }

        //CLASSEMENT

        //VIEW
        return view('/home')->with([
            'games' => $games,
            'lieu' => $lieu,
            'date' => $date,
            'heure' => $heure,
            'equipe' => $equipe,
            'buts' => $buts,
        ]);
    }
}