<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Equipe;
use App\User;
use Carbon\Carbon;

class DiversHelper
{
    public function __construct()
    {
    }

    public function carbon()
    {
        //Carbon date pour déterminer prochain match
        $carbonParis = Carbon::now('Europe/Paris');
    }

    public function nomAuthEquipe()
    {
        //Nom équipe du mec authentifié
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $nomAuthEquipe = $authEquipe->nom;
        }
        return $nomAuthEquipe;
    }

    public function nomAuthLigue()
    {
        //Nom ligue du mec authentifié
        $authEquipe = Auth::user()->equipes()->get();
        $authLigue = Equipe::find($authEquipe)->ligues()->get();
        foreach ($authLigue as $ligue) {
            $nomAuthLigue = $ligue->nom;
        }
        return $nomAuthLigue;
    }
}