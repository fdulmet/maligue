<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Http\Helpers\BannerHelper;
use App\Http\Requests\CreerMatchRequest;
use App\Ligue;
use App\Season;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Game;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        $saisonEnCoursId = intval($request->get('saison'));
        $currentEquipeId = intval($request->get('equipe'));

        if ($saisonEnCoursId !== 0)
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

        $currentLigue = Ligue::where(['id' => $currentSaison->ligue_id])->first();

        $ligues = Ligue::pluck('nom', 'id');

        $saisonsList = $saisons->pluck('nom', 'id');

        $equipes = $currentLigue->equipes()->get();

        if (is_null($currentEquipeId))
        {
            $currentEquipe = $equipes->first();
        }
        else
        {
            $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
        }

        $games = Game::with('equipes')->where([
            'ligue_id' => $currentLigue->id,
            'season_id' => $currentSaison->id
        ])->orderBy('date', 'desc')->get();

        foreach ($games as $game)
        {
            foreach ($game->equipes as $i => $equipe)
            {
                if ($i === 0)
                {
                    $game->first_team = $equipe->nom;
                }
                else
                {
                    $game->second_team = $equipe->nom;
                }
            }
        }

        return view('matchs/index')->with([
            'currentSaison' => $currentSaison,
            'saisons' => $saisons,
            'saisonsList' => $saisonsList,
            'games' => $games,
            'ligues' => $ligues,
            'currentLigue' => $currentLigue,
            'nomAuthLigue' => $currentLigue->nom,
            'currentEquipe' => $currentEquipe,
            'saisonEnCoursId' => $saisonEnCoursId,
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

        $bannerHelper = new BannerHelper();

        $saisons = Season::all()->sortByDesc('date_start');

        $saisonEnCoursId = intval($request->get('saison'));
        $currentEquipeId = intval($request->get('equipe'));

        if ($saisonEnCoursId !== 0)
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

        $currentLigue = Ligue::where(['id' => $currentSaison->ligue_id])->first();

        $teams = $currentLigue->equipes()->pluck('equipes.nom', 'equipes.id');

        if (is_null($currentEquipeId))
        {
            $currentEquipe = $teams->first();
        }
        else
        {
            $currentEquipe = Equipe::where(['id' => $currentEquipeId])->first();
        }

        return view('matchs/create')->with([
            'saisons' => $saisons,
            'currentSaison' => $currentSaison,
            'currentLigue' => $currentLigue,
            'currentEquipe' => $currentEquipe,
            'nomAuthLigue' => $currentLigue->nom,
            'teams' => $teams,
            'anneeDuDernierMatchProgramme' => $bannerHelper->annee(),//si table games dans ordre chronologique
        ]);
    }

    public function store(CreerMatchRequest $request)
    {
        $game = Game::create([
            'lieu' => $request->input('lieu'),
            'ligue_id' => $request->input('ligue_id'),
            'season_id' => $request->input('season_id'),
            'date' => Carbon::parse($request->input('date'))->format('Y-m-d'),
            'heure' => Carbon::parse($request->input('date'))->format('H:i:s'),
        ]);

        $game->equipes()->attach($request->input('equipe1'));
        $game->equipes()->attach($request->input('equipe2'));

        if (!$game->save())
        {
            throw new InternalErrorException('Une erreur s\'est produite, impossible de créer le match.');
        }

        return redirect()->action('MatchController@index');
    }

    public function save(Request $request)
    {
        $input = $request->all();

        $game = Game::find(intval($input['game_id']));

        if (!$game)
        {
            throw new ModelNotFoundException('Game not found.');
        }

        foreach ($game->equipes as $equipe)
        {
            $equipe->pivot->buts = $input['buts_'. $equipe->id];
            $equipe->pivot->save();
        }

        flash('Merci d\'avoir rentrer le score du match.')->success();

        return redirect()->action('HomeController@index');
    }
}
