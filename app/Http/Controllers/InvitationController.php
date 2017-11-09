<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Invitation\ConfirmInvitationRequest;
use App\Http\Requests\Invitation\RegisterInvitationRequest;
use App\Http\Requests\Invitation\CreateTeamInvitationRequest;
use App\Http\Requests\Invitation\CreatePlayerInvitationRequest;

class InvitationController extends Controller
{
    public function createPlayer(CreatePlayerInvitationRequest $request) {

    }
    public function createTeam(CreateTeamInvitationRequest $request) {

    }
    public function register(RegisterInvitationRequest $request) {

    }
    public function confirm(ConfirmInvitationRequest $request) {
      
    }
}
