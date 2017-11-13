<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\IndexDashboardRequest;
use App\Team;
use App\User;

class DashboardController extends Controller
{
    public function index(IndexDashboardRequest $request, $leagueSlug, $seasonSlug, $teamSlug) {
      try {
        /* On charge tout */
        $users = User::doesntHave('teams')->get();
        $team = Team::with([
          'leagues' => function ($query) use ($leagueSlug, $seasonSlug) {
            $query->with([
              'seasons' => function ($query) use ($seasonSlug) {
                $query->with([
                  'games' => function ($query) {
                    $query->with('teams');
                    $query->where('canceled', '=', false);
                  },
                ]);
                $query->where('slug', '=', $seasonSlug);
              },
              'teams', 'teams.captain', 'teams.users'
            ]);
            $query->where('slug', '=', $leagueSlug);
          },
          'games',
          'games.teams',
          'users',
        ])->where('slug', '=', $teamSlug)->first();
        $league = $team->leagues[0];
        $season = $league->seasons[0];
        /* on compile le résumé de la saison */
        $games = $season->games;
        $summary = [];
        foreach ($games as $game) {
          if (!$game->canceled) {
            $teams = $game->teams;
            if (count($teams) !== 2) {
              break;
            }
            $first_team = $teams[0];
            $second_team = $teams[1];
            if ($first_team && $second_team) {
              $fid = $first_team->id;
              $sid = $second_team->id;
              if(!array_key_exists($fid, $summary)) {
                $summary[$fid] = [
                  "data" => $first_team,
                  "matchs" => [
                    "positive" => 0,
                    "neutral" => 0,
                    "negative" => 0,
                    "total" => 0,
                  ],
                  "points" => 0,
                  "goals" => [
                    "positive" => 0,
                    "negative" => 0,
                    "total" => 0,
                    "diff" => 0,
                  ]
                ];
              }
              if(!array_key_exists($sid, $summary)) {
                $summary[$sid] = [
                  "data" => $second_team,
                  "matchs" => [
                    "positive" => 0,
                    "neutral" => 0,
                    "negative" => 0,
                    "total" => 0,
                  ],
                  "points" => 0,
                  "goals" => [
                    "positive" => 0,
                    "negative" => 0,
                    "diff" => 0,
                  ]
                ];
              }
              $ftg = $first_team->pivot->goals;
              $stg = $second_team->pivot->goals;
              if ($ftg !== null && $stg !== null) {
                /* les matchs et les points*/
                if ($ftg > $stg) {
                  $summary[$fid]["matchs"]["positive"] += 1;
                  $summary[$sid]["matchs"]["negative"] += 1;
                  $summary[$fid]["points"] += 3;
                } elseif ($stg > $ftg) {
                  $summary[$fid]["matchs"]["negative"] += 1;
                  $summary[$sid]["matchs"]["positive"] += 1;
                  $summary[$sid]["points"] += 3;
                } else {
                  $summary[$fid]["matchs"]["neutral"] += 1;
                  $summary[$sid]["matchs"]["neutral"] += 1;
                  $summary[$fid]["points"] += 1;
                  $summary[$sid]["points"] += 1;
                }
                $summary[$fid]["matchs"]["total"] += 1;
                $summary[$sid]["matchs"]["total"] += 1;

                /* les buts */
                $summary[$fid]["goals"]["positive"] += $ftg;
                $summary[$fid]["goals"]["negative"] += $stg;
                $summary[$fid]["goals"]["diff"] += $ftg - $stg;
                $summary[$sid]["goals"]["positive"] += $stg;
                $summary[$sid]["goals"]["negative"] += $ftg;
                $summary[$sid]["goals"]["diff"] += $stg - $ftg;
              }
            }
          }
        }
        $seasonSummary = collect($summary)->sortByDesc(function ($team, $key) {
          return $team["points"];
        });
        $season->summary = $seasonSummary;
        /* on envoie tout ça dans la vue */
        return view('pages.league.index', [
            'league' => $league,
            'team' => $team,
            'season' => $season,
            'users' => $users,
        ]);
      } catch(\Exception $e) {
        \Debugbar::info($e);
      }

        /*
        $users = App\User::with(['posts' => function ($query) {
    $query->where('title', 'like', '%first%');
}])->get();*/
      /*
      return view('pages.league.index', [
          'league' => $team->leagues[0],
          'team' => $team,
          'season' => $team->leagues[0]->season[0],
      ]);
      */
      //return view('home');
    }
}
