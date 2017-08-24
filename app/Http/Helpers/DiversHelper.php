<?php
namespace App\Http\Helpers;

use App\Equipe;
use App\Season;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class DiversHelper
{
    private $user;
    public function __construct()
    {
        $this->user = Auth::user();
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
        // Nom équipe du mec authentifié
        $authEquipe = $this->user->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $nomAuthEquipe = $authEquipe->nom;
        }
        return $nomAuthEquipe;
    }

    public function logoAuthEquipe()
    {
        //Logo équipe du mec authentifié
        $authEquipes = $this->user->equipes()->get();
        foreach ($authEquipes as $authEquipe) {
            $logoAuthEquipe = $authEquipe->logo;
        }
        return isset($logoAuthEquipe) ? $logoAuthEquipe : '';
    }

    public function nomAuthLigue()
    {
        $nomAuthLigue = [];
        // Nom ligue du mec authentifié
        $authEquipe = $this->user->equipes()->first();
        $authLigue = Equipe::find($authEquipe->id)->ligues()->get();
        foreach ($authLigue as $ligue) {
            if( ! in_array($ligue->nom, $nomAuthLigue) ) {
                $nomAuthLigue[] = $ligue->nom;
                $seasons = Season::where('ligue_id', $ligue->id)->get();
                if (!$seasons->isEmpty())
                {
                    foreach ($seasons as $season)
                    {
                        $nomAuthLigue[] = $season->nom;
                    }
                }
            }
        }

        return implode(' - ', $nomAuthLigue);
    }
}
