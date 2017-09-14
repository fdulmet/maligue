<?php

namespace App\Http\Helpers;

use App\Game;
use App\Equipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CalendrierHelper {
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function calendrier() {
        $user = Auth::user();
        $currentEquipe = session('currentEquipe');
        $currentLigue = session('currentLigue');
        $currentSaison = session('currentSaison');

        $games = Game::where(['ligue_id' => $currentLigue->id, 'season_id' => $currentSaison->id])->get()->sort(function($a, $b) {

            $aDate = $a->date;
            $aHeure = $a->heure;

            $bDate = $b->date;
            $bHeure = $b->heure;

            if (!is_null($a->date_report) && !is_null($a->heure_report))
            {
                $aDate = $a->date_report;
                $aHeure= $a->heure_report;
            }

            if (!is_null($b->date_report) && !is_null($b->heure_report))
            {
                $bDate = $b->date_report;
                $bHeure= $b->heure_report;
            }

            if($aDate === $bDate) {
                if($aHeure === $bHeure) {
                    return 0;
                }
                return $aHeure < $bHeure ? -1 : 1;
            }
            return $aDate < $bDate ? -1 : 1;
        });

        $statsCalendrier = [];// Array of games statistics
        $i = 0;

        foreach ($games as $game)
        {
            // Check that the two teams are active
            if ($game->equipes->count() < 2)
            {
                $games->forget($game->id);
                continue;
            }

            $statsCalendrier[$i] = [];

            //game id
            $statsCalendrier[$i]['game_id'] = $game->id;

            //date
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $statsCalendrier[$i]['date'] = $date;

            //date strtotime
            $dateStrtotime = $game->date;
            $dateStrtotime = strtotime($dateStrtotime);
            $statsCalendrier[$i]['dateStrtotime'] = $dateStrtotime;

            //heure
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));
            $statsCalendrier[$i]['heure'] = $heure;

            if (!is_null($game->lieu_report))
            {
                $statsCalendrier[$i]['lieu_report'] = $game->lieu_report;
            }

            if (!is_null($game->date_report))
            {
                $statsCalendrier[$i]['date_report'] = $game->date_report;
                $statsCalendrier[$i]['heure_report'] = $game->heure_report;
            }

            //equipes & buts
            $y = 1;
            foreach ($game->equipes as $equipe)
            {
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

    public function lieu()
    {
        return ' Le Five Paris La Chapelle';
    }
}