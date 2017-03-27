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

    public function getAnnee()
    {
        //saisons
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe->games as $authGame) {
            $authDate = $authGame->date;
        }
        return $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));//si table games dans ordre chronologique
    }
}

