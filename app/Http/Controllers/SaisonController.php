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
        foreach ($authEquipe as $equipe)
        {
            $authLigue = $equipe->ligues;
            foreach ($authLigue as $ligue)
            {
                $nomAuthLigue = $ligue->nom;
            }
        }

        //saisons
        foreach ($authEquipe->games as $authGame)
        {
            $authDate = $authGame->date;
        }

        //si table games dans ordre chronologique
        $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));
        $an = $anneeDuDernierMatchProgramme;
        $anMoinsUn = $anneeDuDernierMatchProgramme - 1;

        //vue
        return view('saisons/'.$anMoinsUn.'-'.$an)->with([
            'nomAuthLigue' => $nomAuthLigue,
            'anneeDuDernierMatchProgramme' => $anneeDuDernierMatchProgramme,
        ]);
    }

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }
}
