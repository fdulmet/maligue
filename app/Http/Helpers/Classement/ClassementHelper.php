<?php
namespace App\Http\Helpers\Classement;

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
        $equipes = Classer::getClasser();
        foreach ($equipes as $equipe) {
            $data                   = new Data($equipe);
            $statsClassement[$i]    = [];

            //Nom équipe
            $statsClassement[$i]['nomEquipe']   = $equipe->nom;

            //Joués
            $statsClassement[$i]['joues']       = $data->joues;

            //Points
            $statsClassement[$i]['points']      = $data->points;


            //GNP
            $statsClassement[$i]['gagnes']      = $data->gagnes;
            $statsClassement[$i]['nuls']        = $data->nuls;
            $statsClassement[$i]['perdus']      = $data->perdus;

            //butsPour butsContre
            $statsClassement[$i]['butsPour']    = $data->butsPour;
            $statsClassement[$i]['butsContre']  = $data->butsContre;

            //diff.
            $statsClassement[$i]['diff']        = $data->diff;

            $i++;
        }
        return $statsClassement;
    }
}

//classer
$Classer = new Classer();
