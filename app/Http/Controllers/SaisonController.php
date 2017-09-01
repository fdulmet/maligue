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

        $bannerHelper = new BannerHelper();

        $saisons = Season::all()->sortByDesc('date_start');
        $saisonEnCoursId = $request->input('saison');

        if (!is_null($saisonEnCoursId))
        {
            $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();
            $request->session()->put('saison', $saisonEnCoursId);
        }
        elseif ($request->session()->exists('saison'))
        {
            $currentSaison = Season::where(['id' => intval($request->session()->get('saison'))])->first();
        }
        else
        {
            $currentSaison = $saisons->first();
            $saisonEnCoursId = $currentSaison->id;
        }

        if ($request->session()->exists('equipe'))
        {
            $currentEquipeId = intval(session('equipe'));
        }

        $ligues = Ligue::pluck('nom', 'id');
        $currentLigue = Ligue::where(['id' => $currentSaison->ligue_id])->first();

        $equipes = $currentLigue->equipes()->get();

        if (is_null($currentEquipeId))
        {
            $currentEquipe = $equipes->first();
        }
        else
        {
            $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
        }

        $currentSaison = Season::where(['id' => $saisonEnCoursId])->first();

        if (is_null($currentSaison))
        {
            $currentSaison = Season::all()->first();
        }

        return view('saisons/index')->with([
            'currentSaison' => $currentSaison,
            'currentLigue' => $currentLigue,
            'saisons' => $saisons,
            'ligues' => $ligues,
            'nomAuthLigue' => $currentLigue->nom,
            'currentEquipe' => $currentEquipe,
            'saisonEnCoursId' => $saisonEnCoursId,
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique
        ]);
    }

    public function create()
    {
        $user = Auth::user();

        if (!$user->isAdmin() && !$user->isAdminligue())
        {
            flash('Vous n\'êtes pas autorisé à accéder à cette page.')->error();

            return redirect()->action('HomeController@index');
        }

        $ligues = Ligue::pluck('nom', 'id');

        return view('saisons/create')->with([
            'ligues' => $ligues,
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

        if (!$saison->save())
        {
            throw new InternalErrorException('Une erreur s\'est produite, impossible de créer la nouvelle saison.');
        }

        return redirect()->action('SaisonController@index');
    }
}
