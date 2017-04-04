<?php
namespace App\Http\Helpers\Classement;

use Illuminate\Support\Facades\DB;
use App\Equipe;

class Data
{
    public function __construct()
    {
        //
    }

    //GNP(), joues(), points(), buts(),

    public function GNP()
    {
        $gagnes = 0;
        $nuls = 0;
        $perdus = 0;

        $equipes = Equipe::all();
        foreach ($equipes as $equipe) {
            $games = $equipe->games;
            foreach ($games as $game) {
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
                if ($diffParMatch > 0) {
                    $this->gagnes = $gagnes++;
                } elseif ($diffParMatch == 0 and $butsPourDeChaqueMatch != null and $butsContreDeChaqueMatch != null) {
                    $this->nuls = $nuls++;
                } elseif ($diffParMatch < 0) {
                    $this->perdus = $perdus++;
                }
            }
            return [
                'gagnes' => $gagnes,
                'nuls' => $nuls,
                'perdus' => $perdus,
            ];
        }
    }

    public function joues()
    {
        $statistics = $this->GNP();
        $this->joues =  $statistics['gagnes'] + $statistics['nuls'] + $statistics['perdus'];
        return $this->joues ;

    }

    public function points()
    {
        $statistics = $this->GNP();
        $this->points =  3 * $statistics['gagnes'] + $statistics['nuls'];
        return $this->points ;
    }

    public function buts()
    {
        $butsPour = 0;
        $butsContre = 0;
        $equipes = Equipe::all();
        foreach ($equipes as $equipe) {
            $game = $equipe->games;
            // buts pour
            foreach ($game as $game) {
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

        }
        return [
            'butsPour' => $butsPour,
            'butsContre' => $butsContre,
        ];
    }
}