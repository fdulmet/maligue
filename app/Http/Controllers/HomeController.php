<?php

namespace App\Http\Controllers;

use App\Game;
use App\Equipe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\BannerHelper;
use App\Http\Helpers\CalendrierHelper;
use App\Http\Helpers\ClassementHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //BANNER
        $bannerHelper = new BannerHelper();

        //CALENDRIER
        $calendrierHelper = new CalendrierHelper();

        //CLASSEMENT
        $classementHelper = new ClassementHelper();

        $equipes = Equipe::all();

        $rangParPoints = [];

        foreach ($equipes as $equipe) {
            $gameStats  = $classementHelper->getGamesStats($equipe);
            $points     = $classementHelper->getPoints($gameStats['gagnes'], $gameStats['nuls']);
            $butsStats  = $classementHelper->getButs($equipe);
            $diff       = $butsStats['butsPour'] - $butsStats['butsContre'];

            //Rang
            if (!isset($rangParPoints[$points])) {
                $rangParPoints[$points] = [];
            }
            if (!isset($rangParPoints[$points][$diff])) {
                $rangParPoints[$points][$diff] = [];
            }
            if (!isset($rangParPoints[$points][$diff][$butsStats['butsPour']])) {
                $rangParPoints[$points][$diff][$butsStats['butsPour']] = [];
            }
            $rangParPoints[$points][$diff][$butsStats['butsPour']][] = $equipe;
        }

        ksort($rangParPoints);// Sort by points
        foreach($rangParPoints as $diff) {
            ksort($diff);

            foreach($diff as $butsPour) {
                ksort($butsPour);
            }
        }

        function flatten(array $array) {
            $return = array();
            array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
            return $return;
        }
        $rangs = flatten($rangParPoints);
        $rangs = array_reverse($rangs);



        //ESPACE EQUIPE
        //Nom équipe du mec authentifié
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $nomAuthEquipe = $authEquipe->nom;
        }

        //Nom ligue du mec authentifié
        $authLigue = Equipe::find($authEquipe)->ligues()->get();
        foreach ($authLigue as $ligue) {
            $nomAuthLigue = $ligue->nom;
        }

        //Carbon date pour déterminer prochain match
        $carbonParis = Carbon::now('Europe/Paris');

        //VIEW
        return view('/home')->with([
            'carbonParis' => $carbonParis,
            'nomAuthEquipe' => $nomAuthEquipe,
            'nomAuthLigue' => $nomAuthLigue,

            //banner saison
            'anneeDuDernierMatchProgramme' => $bannerHelper->getAnnee(),

            //calendrier
            'lieu' => $calendrierHelper->getLieu(),
            'statsCalendrier' => $calendrierHelper->getData(),

            //classement
            'statsClassement' => $classementHelper->getData($rangs),

            //espace équipe
            'confirmation' => $request->input('confirmation', null),
            //on utilise resquest pour aller chercher confirmation là où elle est définie,
            //en l'occurence dans les invitations controllers
        ]);
    }
}