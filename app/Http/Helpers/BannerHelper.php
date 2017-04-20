<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Equipe;

class BannerHelper
{
    public function __construct()
    {
    }

    public function annee()
    {
        //saisons
        $auth = Auth::user();
        foreach ($auth->equipes as $authEquipe) {
            $authGame = $authEquipe->games;
            foreach ($authGame as $authGame){
                $authDate = $authGame->date;
            }
        }
        if (isset($authDate)){
            return $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));//si table games dans ordre chronologique
        }
        else{}
    }
}

