<?php
namespace App\Http\Helpers\Classement;

use Illuminate\Support\Facades\DB;
use App\Equipe;

class Data
{
    protected $equipe    = null;
    public $gagnes       = 0;
    public $nuls         = 0;
    public $perdus       = 0;
    public $joues        = 0;
    public $points       = 0;
    public $butsPour     = 0;
    public $butsContre   = 0;
    public $diff         = 0;


    public function __construct($equipe)
    {
        $this->equipe = $equipe;
        $this->GNP();
        $this->joues();
        $this->points();
        $this->buts();
        $this->diff();
    }

    //GNP(), joues(), points(), buts(),

    public function GNP()
    {
        $games = $this->equipe->games;
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
                $this->gagnes++;
            } elseif ($diffParMatch == 0 and $butsPourDeChaqueMatch != null and $butsContreDeChaqueMatch != null) {
                $this->nuls++;
            } elseif ($diffParMatch < 0) {
                $this->perdus++;
            }
        }
//        $a = ['a', 'b', 'c'];
//        $a[0];// == 'a'
//        $a[2];// == 'c'
//
//        $b = [
//            'a' => 10,
//            'b' => 30,
//            'c' => 40
//        ];
//        $b['a'];// == 10
//        $b['c'];// == 40
    }

    public function joues()
    {
        $this->joues = $this->gagnes + $this->nuls + $this->perdus;
    }

    public function points()
    {
        $this->points =  3 * $this->gagnes + $this->nuls;
    }

    public function buts()
    {
        $game = $this->equipe->games;

        // buts pour
        foreach ($game as $game) {
            $butsPourDeChaqueMatch = $game->pivot->buts;
            $this->butsPour += $butsPourDeChaqueMatch;

            //buts contre
            $game_id = $game->pivot->game_id;
            $equipe_id = $game->pivot->equipe_id;
            $autre_equipe_game = DB::table('equipe_game')->where([
                ['game_id', '=', $game_id],
                ['equipe_id', '!=', $equipe_id],
            ])->first();

            $this->butsContre += $autre_equipe_game->buts;
        }
    }

    public function diff() {
        $this->diff = $this->butsPour - $this->butsContre;
    }
}