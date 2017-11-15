<?php

namespace App\Http\Controllers;

use App\Http\Requests\Season\IndexSeasonRequest;
use App\Http\Requests\Season\CreateSeasonRequest;
use App\Http\Requests\Season\StoreSeasonRequest;
use App\Http\Requests\Season\EditSeasonRequest;
use App\Http\Requests\Season\UpdateSeasonRequest;
use App\Http\Requests\Season\DeleteSeasonRequest;
use App\League;
use App\Season;

class SeasonController extends Controller
{
    public function index(IndexSeasonRequest $request, $leagueSlug) {
      $league = League::with([
        'seasons' => function($query) {
          $query->where('is_archived', '<>', true)
          ->orWhereNull('is_archived');
        }
        ])->where('slug', '=', $leagueSlug)->first();
      if (!$league) {
        abort(404);
      }
      return view('pages.season.index', [
        'league' => $league,
        'seasons' => $league->seasons,
      ]);
    }
    public function create(CreateSeasonRequest $request, $leagueSlug) {
      $league = League::where('slug', '=', $leagueSlug)->first();
      if (!$league) {
        abort(404);
      }
      return view('pages.season.edit', [
        'leagueSlug' => $league->slug,
        'season' => null,
      ]);
    }
    public function store(StoreSeasonRequest $request, $leagueSlug) {
      $league = League::where('slug', '=', $leagueSlug)->first();
      if (!$league) {
        abort(404);
      }
      $season = new Season;
      $season->date_start = new \Carbon\Carbon($request->input('date_start'));
      $season->date_end = new \Carbon\Carbon($request->input('date_end'));
      $season->name = $request->input('name');
      $season->league()->associate($league);
      try {
        $season->save();
        flash('La saison a bien été enregistrée')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
    public function edit(EditSeasonRequest $request, $leagueSlug, $seasonSlug) {
      $season = Season::with('league')->where('slug', '=', $seasonSlug)->first();
      if (!$season) {
        abort(404);
      }
      return view('pages.season.edit', [
        'leagueSlug' => $season->league->slug,
        'season' => $season,
      ]);
    }
    public function update(UpdateSeasonRequest $request, $leagueSlug, $seasonSlug) {
      $season = Season::with('league')->where('slug', '=', $seasonSlug)->first();
      if (!$season) {
        abort(404);
      }
      $season->date_start = new \Carbon\Carbon($request->input('date_start'));
      $season->date_end = new \Carbon\Carbon($request->input('date_end'));
      $season->name = $request->input('name');
      try {
        $season->save();
        flash('La saison a bien été enregistrée')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
    public function delete(DeleteSeasonRequest $request, $leagueSlug, $seasonSlug) {
      $league = League::with([
        'seasons' => function($query) use($seasonSlug) {
          $query->where('slug', '=', $seasonSlug);
        }
        ])->where('slug', '=', $leagueSlug)->first();
      if (!$league || $league->seasons->count() !== 1) {
        abort(404);
      }
      $season = $league->seasons[0];
      $season->is_archived = true;
      try {
        $season->save();
        flash('La saison a bien été archivée')->success();
        return redirect('/');
      } catch (\Exception $e) {
        flash('Une erreur est survenue')->error();
        return back()->withInput();
      }
    }
}
