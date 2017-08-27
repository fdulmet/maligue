<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Http\Requests\CreateSaisonRequest;
use App\Ligue;
use App\Season;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\DiversHelper;
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
        $diversHelper = new DiversHelper();
        $bannerHelper = new BannerHelper();

        $saisonEnCoursId = $request->input('saison');

        if (is_null($saisonEnCoursId))
        {
            $saisonEnCoursId = 1;
        }

        $saisons = Season::all();
        $ligues = Ligue::pluck('nom', 'id');

        $currentEquipeId = $request->input('equipe');

        if (is_null($currentEquipeId))
        {
            $currentEquipe = Auth::user()->equipes()->first();
        }
        else
        {
            $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
        }

        return view('saisons/index')->with([
            'saisons' => $saisons,
            'ligues' => $ligues,
            'nomAuthLigue' => $diversHelper->nomAuthLigue(),
            'currentEquipe' => $currentEquipe,
            'saisonEnCoursId' => $saisonEnCoursId,
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique
        ]);
    }

    public function create()
    {
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
