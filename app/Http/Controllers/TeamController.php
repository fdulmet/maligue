<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Team\CreateTeamRequest;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Http\Requests\Team\DeleteTeamRequest;
use App\Http\Requests\Team\AttachPlayerToTeamRequest;
use App\Http\Requests\Team\DetachPlayerToTeamRequest;

class TeamController extends Controller
{
    public function create(CreateTeamRequest $request) {

    }
    public function store(StoreTeamRequest $request) {

    }
    public function update(UpdateTeamRequest $request) {

    }
    public function delete(DeleteTeamRequest $request) {

    }
    public function attachPlayer(AttachPlayerToTeamRequest $request) {

    }
    public function detachPlayer(DetachPlayerToTeamRequest $request) {

    }
}
