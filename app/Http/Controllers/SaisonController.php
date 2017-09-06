<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Http\Requests\CreateSaisonRequest;
use App\Ligue;
use App\Season;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\BannerHelper;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class SaisonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function index(Request $request)
    {
        $user = Auth::user();

        if (!$user->isAdmin() && !$user->isAdminligue())
        {
            flash('Vous n\'êtes pas autorisé à accéder à cette page.')->error();

            return redirect()->action('HomeController@index');
        }

        $currentEquipe = $request->session()->get('currentEquipe');
        $currentLigue  = $request->session()->get('currentLigue');
        $currentSaison = $request->session()->get('currentSaison');

        $bannerHelper = new BannerHelper();

        $saisons = Season::all()->sortByDesc('date_start');


        $ligues = Ligue::pluck('nom', 'id');

        $equipes = $currentLigue->equipes()->get();


        return view('saisons/index')->with([
            'currentSaison' => $currentSaison,
            'currentLigue' => $currentLigue,
            'saisons' => $saisons,
            'ligues' => $ligues,
            'nomAuthLigue' => $currentLigue->nom,
            'currentEquipe' => $currentEquipe,
            'saisonEnCoursId' => $currentSaison->id,
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique
        ]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if (!$user->isAdmin() && !$user->isAdminligue())
        {
            flash('Vous n\'êtes pas autorisé à accéder à cette page.')->error();

            return redirect()->action('HomeController@index');
        }

        $currentEquipe = $request->session()->get('currentEquipe');
        $currentLigue  = $request->session()->get('currentLigue');
        $currentSaison = $request->session()->get('currentSaison');

        $saisons = Season::all()->sortByDesc('date_start');
        $ligues = Ligue::pluck('nom', 'id');

        return view('saisons/create')->with([
            'currentSaison' => $currentSaison,
            'currentLigue' => $currentLigue,
            'saisons' => $saisons,
            'ligues' => $ligues,
            'nomAuthLigue' => $currentLigue->nom,
            'currentEquipe' => $currentEquipe,
            'saisonEnCoursId' => $currentSaison->id,
        ]);
    }

    public function store(CreateSaisonRequest $request)
    {
        $saison = Season::create([
            'nom' => $request->input('nom'),
            'ligue_id' => $request->input('ligue'),
            'date_start' => Carbon::parse($request->input('date_start')),
            'date_end' => Carbon::parse($request->input('date_end')),
        ]);

        return redirect()->action('SaisonController@index');
    }
}
