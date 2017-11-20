@extends('layouts.main')

@section('content')
<div class="container-fluid" id="content">
  <div class="row">
      <div class="col-md-8" id="espace_ligue">
        @include('components.league.dashboard', ['league' => $league])
      </div>
      <div class="col-md-4" id="espace_equipe">
        @include('components.team.dashboard', ['team' => $team])
      </div>
  </div>
</div>
@endsection
