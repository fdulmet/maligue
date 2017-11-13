<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Team\CreateTeamRequest;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Http\Requests\Team\DeleteTeamRequest;
use App\Http\Requests\Team\AttachPlayerToTeamRequest;
use App\Http\Requests\Team\DetachPlayerToTeamRequest;
use App\Team;
use App\User;

class TeamController extends Controller
{
    public function create(CreateTeamRequest $request) {

    }
    public function store(StoreTeamRequest $request) {

    }
    public function update(UpdateTeamRequest $request, $teamSlug) {
      $team = Team::where('slug', '=', $teamSlug)->first();
      if (!$team) {
        abort(404);
      }
      if ($request->filled('sheet_url')) {
        if (!Auth::user()->isAdmin) {
          abort(503);
        } else {
          $team->sheet_url = $request->input('sheet_url');
        }
      }
      if ($request->filled('name')) {
        $team->name = $request->input('name');
      }
      if ($request->filled('captain')) {
        $captain = User::find($request->input('captain'));
        if ($captain) {
          $team->captain()->associate($captain);
        }
      }
      if ($request->hasFile('logo')) {
        $imageName = camel_case($team->name) . '.' . $request->file('logo')->getClientOriginalExtension();
        $imagePath = base_path() . '/public/images/logos/';
        $request->file('logo')->move(
            $imagePath,
            $imageName
        );
        $team->logo = 'images/logos/' . $imageName;
      }
      try {
        $team->save();
        flash("L'équipe a bien été mise à jour")->success();
        return redirect('/');
      } catch (Exception $e) {
        flash('Une erreur est survenue')->error();
        return back();
      }
    }
    public function delete(DeleteTeamRequest $request) {

    }
    public function attachPlayer(AttachPlayerToTeamRequest $request, $teamSlug) {
      $team = Team::where('slug', '=', $teamSlug)->first();
      $playerId = $request->input('playerId');
      $player = User::find($playerId);
      if (!$team || !$player) {
        abort(404);
      }
      try {
        $team->users()->attach([$player->id]);
        flash("Le joueur a bien été ajouté à l'équipe")->success();
        return back();
      } catch (Exception $e) {
        flash('Une erreur est survenue')->error();
        return back();
      }
    }
    public function detachPlayer(DetachPlayerToTeamRequest $request, $teamSlug, $playerId) {
      $team = Team::where('slug', '=', $teamSlug)->first();
      $player = User::find($playerId);
      if (!$team || !$player) {
        abort(404);
      }
      try {
        $team->users()->detach([$player->id]);
        flash("Le joueur a bien été supprimé de l'équipe")->success();
        return back();
      } catch (Exception $e) {
        flash('Une erreur est survenue')->error();
        return back();
      }
    }
}
