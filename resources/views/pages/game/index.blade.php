@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    <a href="{{route('league.season.game.create', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug])}}" class='btn btn-green'>Créer un match</a>
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-main table-sm table-hover table-small">
                    <thead>
                    <tr>
                        <th class="lieu">Lieu</th>
                        <th class="lieu">Terrain</th>
                        <th class="date">Date</th>
                        <th class="team1">Equipe 1</th>
                        <th class="team2">Equipe 2</th>
                        <th class="saison st-sort">Saison</th>
                        <th class="ligue st-sort">Ligue</th>
                        <th class="report st-sort">Annulé</th>
                        <th class="actions">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($games as $game)
                      @if ($game->teams->count() === 2)
                        <tr>
                            <td>{{ $game->place }}</td>
                            <td>{{ $game->field }}</td>
                            <td>{{ $game->when }}</td>
                            <td>{{ $game->teams[0]->name }}</td>
                            <td>{{ $game->teams[1]->name }}</td>
                            <td>{{ $game->season->name }}</td>
                            <td>{{ $game->league->name }}</td>
                            <td>{{ $game->canceled}}</td>
                            <td>
                              <a href="{{route('league.season.game.edit', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug, 'gameId' => $game->id])}}" class='btn btn-green'>Editer</a>
                              <a href="{{route('league.season.game.delete', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug, 'gameId' => $game->id])}}" class='btn btn-orange btn-block'>Supprimer</a>
                            </td>
                        </tr>
                      @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
