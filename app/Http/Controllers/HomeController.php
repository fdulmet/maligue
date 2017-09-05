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
    public function index(Request $request, $ligue = null)
    {
        if ($request->session()->exists('notloggedin'))
        {
            flash($request->session()->get('notloggedin'))->error();
            $request->session()->forget(['notloggedin']);
            Auth::logout();

            return view('auth.login');
        }

        if (!is_null($ligue))
        {
            $ligue = Ligue::where(['slug' => $ligue])->first();
            if (is_null($ligue))
            {
                return redirect('/');
            }

            $request->session()->put('currentLigue', $ligue);
        }
        else
        {
            if ($request->session()->exists('redirectToLigue'))
            {
                $request->session()->forget('redirectToLigue');
            }
            else
            {
                $currentLigue  = $request->session()->get('currentLigue');
                $request->session()->put('redirectToLigue', true);
                return redirect('/' . $currentLigue->slug);
            }
        }



        $user = Auth::user();

        $diversHelper = new DiversHelper();
        $bannerHelper = new BannerHelper();
        $calendrierHelper = new CalendrierHelper($request);
        $classementHelper = new ClassementHelper();

        // Todo: save in sessions the current team/ligue/season on login once for all
        $saisonEnCoursId = intval($request->get('saison'));
        $currentEquipeId = intval($request->get('equipe'));

        $currentEquipe = $request->session()->get('currentEquipe');
        $currentLigue  = $request->session()->get('currentLigue');
        $currentSaison = $request->session()->get('currentSaison');

        // Admin, not a player
        if ($user->isAdmin() || $user->isAdminligue())
        {
            if ($currentEquipeId !== 0)
            {
                $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
            }

            $currentLigue = $currentEquipe->ligues()->first();

            if ($saisonEnCoursId !== 0)
            {
                $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();
                $request->session()->put('saison', $saisonEnCoursId);
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

            $equipes = $currentLigue->equipes()->with('users')->get();
        }
        // Player
        else
        {
            if ($currentEquipeId !== 0)
            {
                $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
            }

            $currentLigue = $currentEquipe->ligues()->first();

            if ($saisonEnCoursId !== 0)
            {
                $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();
                $request->session()->put('saison', $saisonEnCoursId);
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

            $equipes = $currentLigue->equipes()->with('users')->get();
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

        $request->session()->put('currentEquipe', $equipe);

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

        $request->session()->put('currentSaison', $saison);

        return redirect()->action('HomeController@index');
    }
}

