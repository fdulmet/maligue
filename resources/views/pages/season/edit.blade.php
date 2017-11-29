@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    <a href="{{route('league.season.index', ['leagueSlug' => $leagueSlug])}}" class='btn btn-green'>Liste des saisons</a>
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      @if($season)
                        Modifier la saison
                      @else
                        Créer une nouvelle saison
                      @endif
                    </div>
                    <div class="card-block">
                      @if($season)
                        <form method="POST" action="{{route('league.season.update', ['leagueSlug' => $leagueSlug, 'seasonSlug' => $season->slug])}}" accept-charset="UTF-8">
                      @else
                        <form method="POST" action="{{route('league.season.store', ['leagueSlug' => $leagueSlug])}}" accept-charset="UTF-8">
                      @endif

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nom de la saison</label>
                            <input class="form-control" placeholder="Automne 2017" required name="name" type="text" id="name" value="{{ ($season) ? $season->name : old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{--
                        <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
                            <label for="league_id">Ligue</label>
                            <select class="form-control" id="league" name="league_id">
                              <option {{ (!old('league_id')) ? "selected='selected'" : "" }} value="">Sélectionner la ligue...</option>
                              @foreach ($leagues as $league)
                                <option {{ (old('league_id') === $league->id) ? "selected='selected'" : "" }} value='{{$league->id}}'>{{$league->name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('league_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('league_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        --}}
                        <div class="form-group{{ $errors->has('date_start') ? ' has-error' : '' }}">
                            <label for="date_start">Date de d&eacute;but</label>
                            <input class="form-control" required name="date_start" type="date" id="date_start" value="{{ ($season) ? $season->date_start : old('date_start') }}">
                            @if ($errors->has('date_start'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_start') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('date_end') ? ' has-error' : '' }}">
                            <label for="date_end">Date de fin</label>
                            <input class="form-control" required name="date_end" type="date" id="date_end" value="{{ ($season) ? $season->date_end : old('date_end') }}">
                            @if ($errors->has('date_end'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_end') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input class="btn btn-green pull-right" type="submit" value="{{($season) ? 'Modifier' : 'Créer'}}">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
