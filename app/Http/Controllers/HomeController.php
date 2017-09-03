<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\BannerHelper;
use App\Http\Helpers\CalendrierHelper;
use App\Http\Helpers\Classement\ClassementHelper;
use App\Http\Helpers\DiversHelper;
use App\Http\Helpers\EffectifHelper;
use App\Ligue;
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
        $calendrierHelper = new CalendrierHelper($request);
        $classementHelper = new ClassementHelper();

        // Todo: save in sessions the current team/ligue/season on login once for all
        $saisonEnCoursId = intval($request->get('saison'));
        $currentEquipeId = intval($request->get('equipe'));

        if ($request->session()->exists('equipe'))
        {
            $currentEquipeId = intval(session('equipe'));
            $exists = Equipe::where(['id' => $currentEquipeId])->first();
            if (is_null($exists))
            {
                $currentEquipeId = 0;
            }
        }

        // Admin, not a player
        if ($user->isAdmin() || $user->isAdminligue())
        {
            if ($currentEquipeId === 0)
            {
                $currentEquipe = $user->equipes()->first();
                $currentEquipeId = $currentEquipe->id;
            }
            else
            {
                $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
            }

            $currentLigue = $currentEquipe->ligues()->first();

            if ($saisonEnCoursId !== 0)
            {
                $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();
                $request->session()->put('saison', $saisonEnCoursId);
            }
            elseif ($request->session()->exists('saison') && intval($request->session()->get('saison')) !== 0)
            {
                $currentSaison = Season::where(['id' => intval($request->session()->get('saison'))])->first();
                $saisonEnCoursId = $currentSaison->id;
            }
            else
            {
                $currentSaison = $currentLigue->seasons()->first();
                $saisonEnCoursId = $currentSaison->id;
            }

            if (is_null($currentSaison))
            {
                return view('errors.no-seasons')->with([
                    'user' => $user,
                    'currentLigue' => $currentLigue,
                ]);
            }

            $myTeams = $currentLigue->equipes()->pluck('equipes.nom', 'equipes.id');

            $equipes = $currentLigue->equipes()->get();
        }
        // Player
        else
        {
            if ($currentEquipeId === 0)
            {
                $currentEquipe = $user->equipes()->first();
                $currentEquipeId = $currentEquipe->id;
            }
            else
            {
                $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
            }

            $currentLigue = $currentEquipe->ligues()->first();

            if ($saisonEnCoursId !== 0)
            {
                $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();
                $request->session()->put('saison', $saisonEnCoursId);
            }
            elseif ($request->session()->exists('saison') && intval($request->session()->get('saison')) !== 0)
            {
                $currentSaison = Season::where(['id' => intval($request->session()->get('saison'))])->first();
                $saisonEnCoursId = $currentSaison->id;
            }
            else
            {
                $currentSaison = $currentLigue->seasons()->first();
                $saisonEnCoursId = $currentSaison->id;
            }

            if (is_null($currentSaison))
            {
                return view('errors.no-seasons')->with([
                    'user' => $user,
                    'currentLigue' => $currentLigue,
                ]);
            }

            $myTeams = $user->equipes()->pluck('equipes.nom', 'equipes.id');

            $equipes = $currentLigue->equipes()->get();
        }

        $saisons = Season::where(['ligue_id' => $currentLigue->id])->orderBy('date_start', 'desc')->get();

        $nomAuthLigue = $currentLigue->nom;
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

        // Sessions
        if (!$request->session()->exists('currentEquipe'))
        {
            $request->session()->put('currentEquipe', $currentEquipe);
        }
        if (!$request->session()->exists('currentLigue'))
        {
            $request->session()->put('currentLigue', $currentLigue);
        }
        if (!$request->session()->exists('currentSaison'))
        {
            $request->session()->put('currentSaison', $currentSaison);
        }

        return view('home')->with([
            'user' => $user,
            'equipes' => $equipes,
            'currentEquipe' => $currentEquipe,
            'currentJoueursEquipe' => $currentJoueursEquipe,
            'currentSelectableJoueursEquipe' => $currentSelectableJoueursEquipe,
            'playersWithoutTeam' => $playersWithoutTeam,
            'myTeams' => $myTeams,

            //divers
            'carbonStrtotime' => $diversHelper->carbon(),
            'currentLigue' => $currentLigue,
            'logoAuthEquipe' => $currentEquipe->logo,
            'nomAuthEquipe' => $currentEquipe->nom,
            'nomAuthLigue' => $nomAuthLigue,

            //banner
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique

            //calendrier
            'lieu' => $calendrierHelper->lieu(),
            'statsCalendrier' => $calendrierHelper->calendrier(),

            //classement
            'statsClassement' => $classementHelper->classement(),

            //espace équipe
            'confirmation' => $request->input('confirmation', null),

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

    public function switchSaison(Request $request)
    {
        if (!$request->has('saisonId'))
        {
            flash('Impossible de changer de saison')->error();
        }

        $saisonId = intval($request->get('saisonId'));

        $saison = Season::where(['id' => $saisonId])->first();
        if (is_null($saison))
        {
            flash('Cette saison n\'est pas disponible.')->error();
        }

        $request->session()->put('saison', $saisonId);

        return redirect()->action('HomeController@index');
    }
}

