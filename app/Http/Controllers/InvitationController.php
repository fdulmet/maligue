<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Invitation\ConfirmInvitationRequest;
use App\Http\Requests\Invitation\RegisterInvitationRequest;
use App\Http\Requests\Invitation\CreateTeamInvitationRequest;
use App\Http\Requests\Invitation\CreatePlayerInvitationRequest;
use Auth;
use App\User;
use App\Team;
use App\League;
use App\Invitation;
use App\Events\InvitationCreatedEvent;
use App\Events\InvitationAcceptedEvent;
use DB;

class InvitationController extends Controller
{
    public function createPlayer(CreatePlayerInvitationRequest $request, $teamSlug) {
        $team = Team::where('slug', '=', $teamSlug)->first();
        if (!$team) {
          abort(404);
        }
        $from = Auth::user();
        $emails = $request->input('emails');
        foreach($emails as $email) {
          $invitation = new Invitation;
          $invitation->token = str_random(32);
          $invitation->email = $email;
          $invitation->team()->associate($team);
          $invitation->fromUser()->associate($from);
          $invitation->save();
          event(new InvitationCreatedEvent($invitation));
        }
        flash("Vos invitations ont bien été envoyées")->success();
        return back();
    }
    public function createTeam(CreateTeamInvitationRequest $request, $leagueSlug) {
        $league = League::where('slug', '=', $leagueSlug)->first();
        if (!$league) {
          abort(404);
        }
        $from = Auth::user();
        $emails = $request->input('emails');
        foreach($emails as $email) {
          $invitation = new Invitation;
          $invitation->token = str_random(32);
          $invitation->email = $email;
          $invitation->league()->associate($league);
          $invitation->fromUser()->associate($from);
          $invitation->save();
          event(new InvitationCreatedEvent($invitation));
        }
        flash("Vos invitations ont bien été envoyées")->success();
        return back();
    }
    public function register(RegisterInvitationRequest $request, $token) {
      $invitation = Invitation::where('token', '=', $token)->first();
      if (!$invitation) {
        abort(404);
      }
      $user = Auth::user();
      try {
        DB::beginTransaction();
        if ($user) {
          if ($user->email !== $invitation->email) {
            abort(503);
          }
        } else {
          if (!$request->has('register')) {
            flash("Vous devez remplir les champs afin d'accepter l'invitation")->error();
            return back();
          }
          $user = new User;
          $user->first_name = $request->input('register.first_name');
          $user->last_name = $request->input('register.last_name');
          $user->phone = $request->input('register.phone');
          $user->email = $invitation->email;
          $user->password = bcrypt($request->input('register.password'));
          $user->is_client = true;
          $user->save();
          Auth::guard()->login($user);
        }
        if ($invitation->league) {
          if (!$request->has('team')) {
            flash("Vous devez remplir les champs afin d'accepter l'invitation")->error();
            return back();
          } else {
            $team = new Team;
            $team->name = $request->input('team.name');
            if ($request->hasFile('team.logo')) {
              $imageName = camel_case($team->name) . '.' . $request->file('team.logo')->getClientOriginalExtension();
              $imagePath = base_path() . '/public/images/logos/';
              $request->file('team.logo')->move(
                  $imagePath,
                  $imageName
              );
              $team->logo = 'images/logos/' . $imageName;
            }
            $team->captain()->associate($user);
            $team->save();
            $team->users()->attach([$user->id]);
            $team->leagues()->attach([$invitation->league->id]);
          }
        } else {
          $invitation->team->users()->attach([$user->id]);
        }
        $invitation->consumed = true;
        $invitation->save();
        DB::commit();
      } catch (\PDOException $e) {
        DB::rollBack();
        flash('Une erreur est survenue')->error();
        return back()->withInput(
          $request->except('password')
        );
      }
      event(new InvitationAcceptedEvent($invitation, $user));
      return redirect('/');
    }
    public function confirm(ConfirmInvitationRequest $request, $token) {
      $invitation = Invitation::where('token', '=', $token)->first();
      if (!$invitation) {
        abort(404);
      }
      $user = Auth::user();
      if ($user && $user->email === $invitation->email) {
        if ($invitation->team) {
          return view('pages.invitation.team.auth', ['team' => $invitation->team, 'token' => $token]);
        } else {
          return view('pages.invitation.league.auth', ['league' => $invitation->league, 'token' => $token]);
        }
      } else {
        if ($invitation->team) {
          return view('pages.invitation.team.guest', ['team' => $invitation->team, 'token' => $token]);
        } else {
          return view('pages.invitation.league.guest', ['league' => $invitation->league, 'token' => $token]);
        }
      }
    }
}
