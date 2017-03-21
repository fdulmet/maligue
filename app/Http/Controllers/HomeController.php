<?php

namespace App\Http\Controllers;

use App\Game;
use App\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        //CALENDRIER
        //lieu
        $game = Game::find(1);
        $lieu = $game->lieu;

        //chaque ligne
        $games = Game::all();
        $stats = [];// Array of games statistics
        $i = 0;
        foreach ($games as $game){
            $stats[$i] = [];

            //date
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $stats[$i]['date'] = $date;

            //heure
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));
            $stats[$i]['heure'] = $heure;

            //equipes & buts
            $y = 1;
            foreach ($game->equipes as $equipe){
                $pivot = $equipe->pivot;
                $buts = $pivot->buts;
                $nom = Equipe::find( $pivot->equipe_id )->nom;

                $stats[$i]['equipe_'. $y] = $nom;
                $stats[$i]['buts_'. $y] = $buts;

                $y++;
            }
            $i++;
        }


        //CLASSEMENT
        $equipes = Equipe::all();
        $rang = 0;
        $statsClassement = [];// Array of team statistics
        $j = 0;
        foreach ($equipes as $equipe){
            $statsClassement[$j] = [];

            //Rang
            $rang = $rang+1;
            $statsClassement[$j]['rang'] = $rang;

            //Equipe
            $nomEquipe = $equipe->nom;
            $statsClassement[$j]['nomEquipe'] = $nomEquipe;

            //buts pour
            $z = 1;
            $butsPour = 0;
            foreach ($equipe->games as $game){
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $butsPour += $butsPourDeChaqueMatch;
                $z++;
            }
            $statsClassement[$j]['butsPour'] = $butsPour;

            //buts contre
            foreach ($equipe->games as $game){
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();

                $zz = 1;
                $butsContre = 0;
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                    $butsContre += $butsContreDeChaqueMatch;
                    $zz++;
                }
                $statsClassement[$j]['butsContre'] = $butsContre;
            }

            //diff.
            $diff = $butsPour - $butsContre;
            $statsClassement[$j]['diff'] = $diff;

            //Joués
            $joues = $equipe->games->count();
            $statsClassement[$j]['joues'] = $joues;

            //Gagnés
            $a = 1;
            foreach ($equipe->games as $game){
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
                $gagnes = 0;
                if ($diffParMatch>0){
                    $gagneChaqueMatch = 1;
                } else{
                    $gagneChaqueMatch = 0;
                }
                $gagnes += $gagneChaqueMatch;
                $a++;
            }
            $statsClassement[$j]['gagnes'] = $gagnes;

            //Nuls
            $b = 1;
            foreach ($equipe->games as $game){
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
                $nuls = 0;
                if ($diffParMatch=0){
                    $nulChaqueMatch = 1;
                } else{
                    $nulChaqueMatch = 0;
                }
                $nuls += $nulChaqueMatch;
                $b++;
            }
            $statsClassement[$j]['nuls'] = $nuls;

            //Perdus
            $c = 1;
            foreach ($equipe->games as $game){
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
                $perdus = 0;
                if ($diffParMatch<0){
                    $perduChaqueMatch = 1;
                } else{
                    $perduChaqueMatch = 0;
                }
                $perdus += $perduChaqueMatch;
                $c++;
            }
            $statsClassement[$j]['perdus'] = $perdus;

            //Points
            $points = 3*$gagnes + $nuls;
            $statsClassement[$j]['points'] = $points;

            $j++;
        }


    //VIEW
        return view('/home')->with([
            'lieu' => $lieu,
            'stats' => $stats,
            'statsClassement' => $statsClassement,
            'confirmation' => $request->input('confirmation', null),
            //on utilise resquest pour aller chercher confirmation là où elle est définie,
            //en l'occurence dans les invitations controllers
        ]);
    }
}