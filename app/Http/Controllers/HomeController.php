<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\BannerHelper;
use App\Http\Helpers\CalendrierHelper;
use App\Http\Helpers\Classement\ClassementHelper;
use App\Http\Helpers\DiversHelper;
use App\Http\Helpers\EffectifHelper;
use App\Season;
use App\Equipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Homepage
     * @param  Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $diversHelper = new DiversHelper();
        $bannerHelper = new BannerHelper();
        $calendrierHelper = new CalendrierHelper();
        $classementHelper = new ClassementHelper();

        $equipes = Equipe::all();
        $saisons = Season::all();

        $saisonEnCoursId = $request->input('saison');
        $currentEquipeId = $request->input('equipe');

        if ($request->session()->exists('equipe'))
        {
            $currentEquipeId = intval(session('equipe'));
        }

        if (is_null($currentEquipeId))
        {
            $currentEquipe = Auth::user()->equipes()->first();
        }
        else
        {
            $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
        }

        $currentJoueursEquipe = $currentEquipe->users()->get();
        $currentSelectableJoueursEquipe = [];
        foreach ($currentJoueursEquipe as $joueur)
        {
            if ($joueur->id !== $user->id && !$joueur->isCapitaine())
            {
                $currentSelectableJoueursEquipe[$joueur->id] = $joueur->nom . ' ' . $joueur->prenom;
            }
        }

        $playersWithoutTeam = User::doesntHave('equipes')->pluck('nom', 'id');

        if (is_null($saisonEnCoursId))
        {
            $saisonEnCoursId = 1;
        }

        $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();

        if (is_null($currentSaison))
        {
            $currentSaison = Season::all()->first();
            flash('Cette saison n\'est pas disponible.')->error();
        }

        return view('home')->with([
            'user' => $user,
            'equipes' => $equipes,
            'currentEquipe' => $currentEquipe,
            'currentJoueursEquipe' => $currentJoueursEquipe,
            'currentSelectableJoueursEquipe' => $currentSelectableJoueursEquipe,
            'playersWithoutTeam' => $playersWithoutTeam,

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
            'currentSaison' => $currentSaison,
            'saisons' => $saisons,
            'saisonEnCoursId' => $saisonEnCoursId,
        ]);
    }

    public function switchTeam(Request $request)
    {
        if (!$request->has('equipeId'))
        {
            flash('Impossible de changer d\'équipe')->error();
        }

        $equipeId = intval($request->get('equipeId'));

        $equipe = Equipe::where(['id' => $equipeId])->first();
        if (is_null($equipe))
        {
            flash('Cette équipe n\'est pas disponible.')->error();
        }

        $request->session()->put('equipe', $equipeId);

        return redirect()->action('HomeController@index');
    }
}

