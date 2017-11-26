@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    <a href="{{route('league.season.game.index', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug])}}" class='btn btn-green'>Liste des matchs</a>
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        @if($game)
                            Modifier un match
                        @else
                            Créer un nouveau match
                        @endif
                    </div>
                    <div class="card-block">
                        @if ($game)
                          <form method="POST" action="{{route('league.season.game.update', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug, 'gameId' => $game->id])}}" accept-charset="UTF-8">
                        @else
                          <form method="POST" action="{{route('league.season.game.store', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug])}}" accept-charset="UTF-8">
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Lieu</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{ ($game) ? $game->place : old('place') }}" required>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('field') ? ' has-error' : '' }}">
                            <label for="field" class="col-md-4 control-label">Terrain</label>

                            <div class="col-md-6">
                                <input id="field" type="text" class="form-control" name="field" value="{{ ($game) ? $game->field : old('field') }}" required>

                                @if ($errors->has('field'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('field') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('when') ? ' has-error' : '' }}">
                            <label for="when" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="when" type="datetime-local" class="form-control" name="when" value="{{ ($game) ? \Carbon\Carbon::parse($game->when)->format('Y-m-d\TH:i') : old('when') }}" required>

                                @if ($errors->has('when'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('when') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--
                        <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
                            <label for="league_id">Ligue</label>
                            <select class="form-control" id="league" name="league_id">
                              <option {{ (!($game || old('league_id'))) ? "selected='selected'" : "" }} value="">Sélectionner la ligue...</option>
                              @foreach ($leagues as $league)
                                <option {{ (($game && $game->league->id === $league->id) || (old('league_id') === $league->id)) ? "selected='selected'" : "" }} value='{{$league->id}}'>{{$league->name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('league_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('league_id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('season_id') ? ' has-error' : '' }}">
                            <label for="season_id">Saison</label>
                            <select class="form-control" id="league" name="season_id">
                              <option {{ (!($game || old('season_id'))) ? "selected='selected'" : "" }} value="">Sélectionner la ligue...</option>
                              @foreach ($seasons as $season)
                                <option {{ (($game && $game->season->id === $season->id) || (old('season_id') === $season->id)) ? "selected='selected'" : "" }} value='{{$season->id}}'>{{$season->name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('season_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('season_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        --}}
                        <div class="form-group{{ $errors->has('team_1') ? ' has-error' : '' }}">
                            <label for="team_1">Equipe 1</label>
                            <select class="form-control" id="team_1" name="team_1">
                              <option {{ (!($game || old('team_1'))) ? "selected='selected'" : "" }} value="">Sélectionner la ligue...</option>
                              @foreach ($teams as $team)
                                <option {{ (($game && $game->teams[0]->id === $team->id) || (old('team_1') === $team->id)) ? "selected='selected'" : "" }} value='{{$team->id}}'>{{$team->name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('team_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('team_1') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('team_2') ? ' has-error' : '' }}">
                            <label for="team_2">Equipe 2</label>
                            <select class="form-control" id="team_2" name="team_2">
                              <option {{ (!($game || old('team_2'))) ? "selected='selected'" : "" }} value="">Sélectionner la ligue...</option>
                              @foreach ($teams as $team)
                                <option {{ (($game && $game->teams[1]->id === $team->id) || (old('team_2') === $team->id)) ? "selected='selected'" : "" }} value='{{$team->id}}'>{{$team->name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('team_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('team_2') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input class="btn btn-green pull-right" type="submit" value="{{($game) ? 'Modifier' : 'Créer'}}">
                      </form>
                        <br/>
                        @if($game)
                          <hr>

                          <h5>Report du match</h5>

                          @if($game->initialGame)
                            <p>Le match était initialement prévu le {{$game->initialGame->whenWithFormatting}}. <br/>
                              <a class='btn btn-orange' href="{{route('league.season.game.cancelDelay', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug, 'gameId' => $game->id])}}">Annuler le report</a>
                            </p>
                          @endif
                          <h6>Reporter le match</h5>
                          <form method="POST" action="{{route('league.season.game.delay', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $seasonSlug, 'gameId' => $game->id])}}" accept-charset="UTF-8">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                                <label for="place" class="col-md-4 control-label">Lieu</label>

                                <div class="col-md-6">
                                    <input id="place" type="text" class="form-control" name="place" value="{{ ($game) ? $game->place : old('place') }}" required>

                                    @if ($errors->has('place'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('place') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('field') ? ' has-error' : '' }}">
                                <label for="field" class="col-md-4 control-label">Terrain</label>

                                <div class="col-md-6">
                                    <input id="field" type="text" class="form-control" name="field" value="{{ ($game) ? $game->field : old('field') }}" required>

                                    @if ($errors->has('field'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('field') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('when') ? ' has-error' : '' }}">
                                <label for="when" class="col-md-4 control-label">Date</label>

                                <div class="col-md-6">
                                    <input id="when" type="datetime-local" class="form-control" name="when" value="{{ ($game) ? \Carbon\Carbon::parse($game->when)->format('Y-m-d\TH:i') : old('when') }}" required>

                                    @if ($errors->has('when'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('when') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <input class="btn btn-green pull-right" type="submit" value="Reporter le match">
                          </form>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
