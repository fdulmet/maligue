<?php

namespace App\Http\Controllers;

use App\Game;
use App\Equipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\DiversHelper;
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
        //divers
        $diversHelper = new DiversHelper();

        //banner
        $bannerHelper = new BannerHelper();

        //calendrier
        $calendrierHelper = new CalendrierHelper();

        //classement
        $classementHelper = new ClassementHelper();

        //VIEW
        return view('/home')->with([
            //divers
            'carbonParis' => $diversHelper->getCarbon(),
            'nomAuthEquipe' => $diversHelper->getNomAuthEquipe(),
            'nomAuthLigue' => $diversHelper->getNomAuthLigue(),

            //banner
            'anneeDuDernierMatchProgramme' => $bannerHelper->getAnnee(),//si table games dans ordre chronologique

            //calendrier
            'lieu' => $calendrierHelper->getLieu(),
            'statsCalendrier' => $calendrierHelper->getCalendrier(),

            //classement
            'statsClassement' => $classementHelper->getClassement(),

            //espace équipe
            'confirmation' => $request->input('confirmation', null),
            //on utilise resquest pour aller chercher confirmation là où elle est définie,
            //en l'occurence dans les invitations controllers
        ]);
    }
}

