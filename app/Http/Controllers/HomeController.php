<?php

namespace App\Http\Controllers;

use App\Game;
use App\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        //nomAuthLigue
        $authEquipe = Auth::user()->equipes()->get();
        foreach ($authEquipe as $authEquipe) {
            $authLigue = $authEquipe->ligues;
            foreach ($authLigue as $authLigue) {
                $nomAuthLigue = $authLigue->nom;
            }
        }
        //saisons
        foreach ($authEquipe->games as $authGame){
            $authDate = $authGame->date;
        }
        $anneeDuDernierMatchProgramme = date('Y', strtotime($authDate));//si table games dans ordre chronologique

        //CALENDRIER
        //lieu
        $game = Game::find(1);
        $lieu = $game->lieu;

        //chaque ligne
        $games = Game::all();
        $statsCalendrier = [];// Array of games statistics
        $i = 0;
        foreach ($games as $game){
            $statsCalendrier[$i] = [];

            //date
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $statsCalendrier[$i]['date'] = $date;

            //heure
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));
            $statsCalendrier[$i]['heure'] = $heure;

            //equipes & buts
            $y = 1;
            foreach ($game->equipes as $equipe){
                $pivot = $equipe->pivot;
                $buts = $pivot->buts;
                $nom = Equipe::find( $pivot->equipe_id )->nom;
                $statsCalendrier[$i]['equipe_'. $y] = $nom;
                $statsCalendrier[$i]['buts_'. $y] = $buts;

                $y++;
            }
            $i++;
        }

        //CLASSEMENT
        $equipes = Equipe::all();
        $statsClassement = [];// Array of team statistics
        $j = 0;
        //$rang = 0;
        foreach ($equipes as $equipe){
            $statsClassement[$j] = [];

            //Rang
            //$rang = $rang+1;
            //$statsClassement[$j]['rang'] = $rang;

            //Equipe
            $nomEquipe = $equipe->nom;
            $statsClassement[$j]['nomEquipe'] = $nomEquipe;

            //buts pour
            $butsPour = 0;
            foreach ($equipe->games as $game){
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $butsPour += $butsPourDeChaqueMatch;
            }
            $statsClassement[$j]['butsPour'] = $butsPour;

            //buts contre
            foreach ($equipe->games as $game){
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_games = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();

                $butsContre = 0;
                foreach ($autre_equipe_games as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                    $butsContre += $butsContreDeChaqueMatch;
                }
            }
            $statsClassement[$j]['butsContre'] = $butsContre;

            //diff.
            $diff = $butsPour - $butsContre;
            $statsClassement[$j]['diff'] = $diff;

            //Joués
            $joues = $equipe->games->count();
            $statsClassement[$j]['joues'] = $joues;

            //Gagnés
            $gagnes = 0;
            foreach ($equipe->games as $game){
                //diff. par match
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;

                //condition
                if ($diffParMatch > 0){
                    $gagneChaqueMatch = 1;
                } else{
                    $gagneChaqueMatch = 0;
                }
                $gagnes += $gagneChaqueMatch;
            }
            $statsClassement[$j]['gagnes'] = $gagnes;

            //Nuls
            $nuls = 0;
            foreach ($equipe->games as $game){
                //diff. par match
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;

                //condition
                if ($diffParMatch = 0){
                    $nulChaqueMatch = 1;
                } else{
                    $nulChaqueMatch = 0;
                }
                $nuls += $nulChaqueMatch;
            }
            $statsClassement[$j]['nuls'] = $nuls;

            //Perdus
            $perdus = 0;
            foreach ($equipe->games as $game){
                //diff. par match
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;

                //condition
                if ($diffParMatch<0){
                    $perduChaqueMatch = 1;
                } else{
                    $perduChaqueMatch = 0;
                }
                $perdus += $perduChaqueMatch;
            }
            $statsClassement[$j]['perdus'] = $perdus;

            //Points
            $points = 3*$gagnes + $nuls;
            $statsClassement[$j]['points'] = $points;

            $j++;
        }


    //VIEW
        return view('/home')->with([
            'nomAuthLigue' => $nomAuthLigue,
            'anneeDuDernierMatchProgramme' => $anneeDuDernierMatchProgramme,
            'lieu' => $lieu,
            'statsCalendrier' => $statsCalendrier,
            'statsClassement' => $statsClassement,
            'confirmation' => $request->input('confirmation', null),
            //on utilise resquest pour aller chercher confirmation là où elle est définie,
            //en l'occurence dans les invitations controllers
        ]);
    }
}