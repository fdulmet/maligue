<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Equipe;
use App\User;
use Carbon\Carbon;
use DateTime;

class DiversHelper
{
    public function __construct()
    {
    }

    public function carbon()
    {
        //Carbon date pour déterminer prochain match
        $carbon = Carbon::now('Europe/Paris');
        //$carbon2= date('Y-m-d', strtotime($carbon));
        $carbonStrtotime = strtotime($carbon);
        return $carbonStrtotime;
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