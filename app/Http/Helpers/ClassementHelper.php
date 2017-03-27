<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\DB;

class ClassementHelper
{
    public function __construct()
    {
    }

    public function getData($equipes)
    {
        $statsClassement = [];// Array of team statistics
        $j = 0;

        foreach ($equipes as $equipe) {
            $statsClassement[$j] = [];

            //Nom équipe
            $statsClassement[$j]['nomEquipe'] = $equipe->nom;

            $butsStats = $this->getButs($equipe);
            $statsClassement[$j]['butsPour'] = $butsStats['butsPour'];
            $statsClassement[$j]['butsContre'] = $butsStats['butsContre'];

            //diff.
            $diff = $butsStats['butsPour'] - $butsStats['butsContre'];
            $statsClassement[$j]['diff'] = $diff;

            //Joués
            $joues = $equipe->games->count();
            $statsClassement[$j]['joues'] = $joues;

            $gameStats = $this->getGamesStats($equipe);
            $statsClassement[$j]['gagnes']  = $gameStats['gagnes'];
            $statsClassement[$j]['nuls']    = $gameStats['nuls'];
            $statsClassement[$j]['perdus']  = $gameStats['perdus'];


            //Points
            $points = $this->getPoints($gameStats['gagnes'], $gameStats['nuls']);
            $statsClassement[$j]['points'] = $points;

            $j++;
        }
        
        return $statsClassement;
    }

    public function getGamesStats($equipe) {
        //diff. par match
        $gagnes = 0;
        $nuls = 0;
        $perdus = 0;

        foreach ($equipe->games as $game) {
            $butsPourDeChaqueMatch = $game->pivot->buts;
            $game_id = $game->pivot->game_id;
            $equipe_id = $game->pivot->equipe_id;
            $autre_equipe_game = DB::table('equipe_game')->where([
                ['game_id', '=', $game_id],
                ['equipe_id', '!=', $equipe_id],
            ])->get();
            foreach ($autre_equipe_game as $autre_equipe_game) {
                $butsContreDeChaqueMatch = $autre_equipe_game->buts;
            }
            $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;

            //G N P
            if ($diffParMatch > 0) {
                $gagnes++;
            } elseif ($diffParMatch == 0) {
                $nuls++;
            } elseif ($diffParMatch < 0) {
                $perdus++;
            }
        }

        return [
            'gagnes'    => $gagnes,
            'nuls'      => $nuls,
            'perdus'    => $perdus,
        ];
    }

    public function getPoints($gagnes, $nuls) {
        return 3 * $gagnes + $nuls;
    }

    public function getButs($equipe) {
        $butsPour = 0;
        $butsContre = 0;
        foreach ($equipe->games as $game) {
            // buts pour
            $butsPourDeChaqueMatch = $game->pivot->buts;
            $butsPour += $butsPourDeChaqueMatch;

            //buts contre
            $game_id = $game->pivot->game_id;
            $equipe_id = $game->pivot->equipe_id;
            $autre_equipe_game = DB::table('equipe_game')->where([
                ['game_id', '=', $game_id],
                ['equipe_id', '!=', $equipe_id],
            ])->first();

            $butsContre += $autre_equipe_game->buts;
        }

        return [
            'butsPour'  => $butsPour,
            'butsContre'  => $butsContre,
        ];
    }
}