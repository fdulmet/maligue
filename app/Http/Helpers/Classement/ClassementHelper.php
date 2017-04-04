<?php
namespace App\Http\Helpers\Classement;

use App\Http\Helpers\Classement\Data;
use App\Http\Helpers\Classement\Classer;
use App\Equipe;

class ClassementHelper
{
    public function __construct()
    {
    }

    public function classement()
    {
        $statsClassement = [];
        $i = 0;
        $equipes = Equipe::all();
        foreach ($equipes as $equipe) {
            $statsClassement[$i] = [];

            //Nom équipe
            $statsClassement[$i]['nomEquipe'] = $equipe->nom;

            //Joués
            $joues = new Data();
            $statsClassement[$i]['joues'] = $joues->joues();

            //Points
            $points = new Data();
            $statsClassement[$i]['points'] = $points->points();

            //GNP
            $GNP = new Data();
            $statsClassement[$i]['gagnes']  = $GNP->GNP();
            //$statsClassement[$i]['nuls']    = $nuls->GNP();
            //$statsClassement[$i]['perdus']  = $perdus->GNP();

            //butsPour butsContre
            $buts = new Data();
            $butsPour = $buts->buts();
            //$butsContre= $buts->buts;
            $statsClassement[$i]['butsPour'] = $butsPour;
            //$statsClassement[$i]['butsContre'] = $butsContre;

            //diff.
            //$diff = $butsPour - $butsContre;
            //$statsClassement[$i]['diff'] = $diff;

            $i++;
        }
        return $statsClassement;
    }
}

//classer
//$_classerHelper = new Classer();
