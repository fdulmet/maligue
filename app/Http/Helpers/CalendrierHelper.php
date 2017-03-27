<?php

namespace App\Http\Helpers;

use App\Game;
use App\Equipe;

class CalendrierHelper {
    public function __construct() {
        //
    }

    public function getData() {
        $games = Game::all()->sortBy('date');
        $statsCalendrier = [];// Array of games statistics
        $i = 0;

        foreach ($games as $game){
            $statsCalendrier[$i] = [];

            //game id
            $statsCalendrier[$i]['game_id'] = $game->id;

            //date
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $statsCalendrier[$i]['date'] = $date;

            //heure
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));
            $statsCalendrier[$i]['heure'] = $heure;

            //equipes & buts
            $y = 1;
            foreach ($game->equipes as $equipe){
                $pivot = $equipe->pivot;
                $buts = $pivot->buts;
                $nom = Equipe::find( $pivot->equipe_id )->nom;
                $statsCalendrier[$i]["equipe_{$y}_id"] = $equipe->id;
                $statsCalendrier[$i]['equipe_'. $y] = $nom;
                $statsCalendrier[$i]['buts_'. $y] = $buts;

                $y++;
            }
            $i++;
        }

        return $statsCalendrier;
    }

    public function getLieu() {
        $game = Game::find(1);
        return $game->lieu;
    }
}