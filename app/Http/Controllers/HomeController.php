<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\BannerHelper;
use App\Http\Helpers\CalendrierHelper;
use App\Http\Helpers\Classement\ClassementHelper;
use App\Http\Helpers\DiversHelper;
use App\Http\Helpers\EffectifHelper;
use App\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        $diversHelper = new DiversHelper();
        $bannerHelper = new BannerHelper();
        $calendrierHelper = new CalendrierHelper();
        $classementHelper = new ClassementHelper();

        // gestion des changements de saisons
        $saisons = Season::all();

        $saisonEnCoursId = $request->input('saison');

        //VIEW
        return view('home')->with([
            //divers
            'carbonStrtotime' => $diversHelper->carbon(),
            'logoAuthEquipe' => $diversHelper->logoAuthEquipe(),
            'nomAuthEquipe' => $diversHelper->nomAuthEquipe(),
            'nomAuthLigue' => $diversHelper->nomAuthLigue(),

            //banner
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique

            //calendrier
            'lieu' => $calendrierHelper->lieu(),
            'statsCalendrier' => $calendrierHelper->calendrier(),

            //classement
            'statsClassement' => $classementHelper->classement(),

            //espace équipe
            'confirmation' => $request->input('confirmation', null),
            //'effectif' => $effectifHelper->effectif(),
            //on utilise resquest pour aller chercher confirmation là où elle est définie,
            //en l'occurence dans les invitations controllers

            // Saisons
            'saisons' => $saisons,
            'saisonEnCoursId' => $saisonEnCoursId,
        ]);
    }
}

