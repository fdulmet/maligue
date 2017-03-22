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
        //chaque ligne
        $games = Game::all();
        $stats = [];
        $i = 0;
        foreach ($games as $game){
            $stats[$i] = [];
            $date = $game->date;
            $stats[$i]['date'] = $date;

            $y = 1;
            foreach ($game->equipes as $equipe){
                $buts = $equipe->pivot->buts;
                $stats[$i]['buts_'. $y] = $buts;
                $y++;
            }

            $i++;
        }

        return view('/home')->with([
            'stats' => $stats,
        ]);
    }
}