<?php

namespace App\Http\Controllers;

use App\Game;
use App\Season;
use App\League;
use App\Team;
use App\Http\Requests\Game\IndexGameRequest;
use App\Http\Requests\Game\CreateGameRequest;
use App\Http\Requests\Game\StoreGameRequest;
use App\Http\Requests\Game\DelayGameRequest;
use App\Http\Requests\Game\EditGameRequest;
use App\Http\Requests\Game\UpdateGameRequest;
use App\Http\Requests\Game\DeleteGameRequest;
use App\Http\Requests\Game\SetScoreGameRequest;
use App\Http\Requests\Game\CancelDelayGameRequest;
use Carbon\Carbon;

class GameController extends Controller
{
    public function index(IndexGameRequest $request, $leagueSlug, $seasonSlug) {
      $season = Season::with([
        'games' => function ($query) {
          $query->with('teams', 'season', 'league');
          $query->orderBy('when', 'desc');
        }
      ])->where('slug', '=', $seasonSlug)->first();
      if (!$season) {
        abort(404);
      }
      return view('pages.game.index', [
        'leagueSlug' => $leagueSlug,
        'seasonSlug' => $seasonSlug,
        'games' => $season->games->reverse(),
      ]);
    }
    public function create(CreateGameRequest $request, $leagueSlug, $seasonSlug) {
      $league = League::with('teams')->where('slug', $leagueSlug)->first();
      return view('pages.game.edit', [
        'leagueSlug' => $leagueSlug,
        'seasonSlug' => $seasonSlug,
        'game' => null,
        'teams' => $league->teams,
      ]);
    }
    public function store(StoreGameRequest $request, $leagueSlug, $seasonSlug) {
      $team1Id = $request->input('team_1');
      $team2Id = $request->input('team_2');
      $league = League::with([
        'seasons' => function($query) use($seasonSlug) {
          $query->where('slug', '=', $seasonSlug);
        },
        'teams' => function($query) use($team1Id, $team2Id) {
          $query->whereIn('team_id', [$team1Id, $team2Id]);
        }
        ])->where('slug', '=', $leagueSlug)->first();
      if (!$league || $league->seasons->count() !== 1) {
        abort(404);
      }
      $game = new Game;
      $game->when = new \Carbon\Carbon($request->input('when'));
      $game->place = $request->input('place');
      if ($request->filled('field')) {
        $game->field = $request->input('field');
      }
      try {
        $game->league()->associate($league);
        $game->season()->associate($league->seasons[0]);
        $game->save();
        $game->teams()->sync([$league->teams[0]->id, $league->teams[1]->id]);

        flash('Le match a bien été crée')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
    public function setScore(SetScoreGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $goals = $request->input('goal');
      $game = Game::with('teams')->find($gameId);
      if (!$game) {
        abort(404);
      }
      $teamsId = array_keys($goals);
      if ($game->teams->count() !== 2 || $game->teams->whereIn('id', $teamsId)->count() !== 2) {
        \Debugbar::info('Erreur');
      }
      foreach($game->teams as $team) {
        $game->teams()->updateExistingPivot($team->id, ['goals' => $goals[$team->id]]);
      }
      return view('home');
    }
    public function edit(EditGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $league = League::with('teams')->where('slug', $leagueSlug)->first();
      $game = Game::find($gameId);
      return view('pages.game.edit', [
        'leagueSlug' => $leagueSlug,
        'seasonSlug' => $seasonSlug,
        'game' => $game,
        'teams' => $league->teams,
      ]);
    }
    public function update(UpdateGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $game = Game::find($gameId);
      if (!$game) {
        abort(404);
      }
      $team1Id = $request->input('team_1');
      $team2Id = $request->input('team_2');
      $league = League::with([
        'teams' => function($query) use($team1Id, $team2Id) {
          $query->whereIn('team_id', [$team1Id, $team2Id]);
        }
        ])->where('slug', '=', $leagueSlug)->first();
      if (!$league || $league->seasons->count() !== 1) {
        abort(404);
      }
      $game->when = new \Carbon\Carbon($request->input('when'));
      $game->place = $request->input('place');
      if ($request->filled('field')) {
        $game->field = $request->input('field');
      }
      try {
        $game->save();
        $game->teams()->sync([$league->teams[0]->id, $league->teams[1]->id]);

        flash('Le match a bien été mis à jour')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
    public function delete(DeleteGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $game = Game::find($gameId);
      if (!$game) {
        abort(404);
      }
      $game->delete();
      return back();
    }
    public function delay(DelayGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $initialGame = Game::find($gameId);
      if (!$initialGame) {
        abort(404);
      }
      $newGame = new Game;
      $newGame->league()->associate($initialGame->league);
      $newGame->season()->associate($initialGame->season);
      $newGame->initialGame()->associate($initialGame);
      $newGame->when = new \Carbon\Carbon($request->input('when'));
      $newGame->place = $request->input('place');
      if ($request->filled('field')) {
        $newGame->field = $request->input('field');
      }

      try {
        $newGame->save();
        $newGame->teams()->sync([$initialGame->teams[0]->id, $initialGame->teams[1]->id]);
        $initialGame->canceled = true;
        $initialGame->save();
        flash('Le report du match a bien été enregistré')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
    public function cancelDelay(CancelDelayGameRequest $request, $leagueSlug, $seasonSlug, $gameId) {
      $delayedGame = Game::find($gameId);
      if (!$delayedGame) {
        abort(404);
      }
      $initialGame = $delayedGame->initialGame;
      $initialGame->canceled = false;
      try {
        $initialGame->save();
        $delayedGame->delete();
        flash('Le report du match a bien été annulé')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
}
