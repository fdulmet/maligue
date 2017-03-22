<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaisonController extends Controller
{
    public function saison()
    {
        //BANNER
        //nomAuthLigue
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $authLigue = $authEquipe->ligues;
            foreach ($authLigue as $authLigue) {
                $nomAuthLigue = $authLigue->nom;
            }
        }
        //saisons
        foreach ($authEquipe->games as $authGame){
            $authDate = $authGame->date;
        }
        $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));//si table games dans ordre chronologique

        return view('saisons/2015-2016')->with([
            'nomAuthLigue' => $nomAuthLigue,
            'anneeDuDernierMatchProgramme' => $anneeDuDernierMatchProgramme,
        ]);
    }
}
