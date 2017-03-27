<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\Auth;
use App\User;

class BannerHelper
{
    public function __construct()
    {
    }

    public function getAnnee()
    {
        //nomAuthLigue
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $authLigue = $authEquipe->ligues;
            foreach ($authLigue as $authLigue) {
                $nomAuthLigue = $authLigue->nom;
            }
        }
        //saisons
        foreach ($authEquipe->games as $authGame) {
            $authDate = $authGame->date;
        }
        return $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));//si table games dans ordre chronologique
    }
}

