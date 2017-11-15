@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    <a href="{{route('team.index')}}" class='btn btn-green'>Liste des équipes</a>
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      Modifier une équipe
                    </div>
                    <div class="card-block">
                        <form method="POST" action="{{route('team.update', ['teamSlug' => $team->slug])}}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $team->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sheet_url') ? ' has-error' : '' }}">
                            <label for="sheet_url" class="col-md-4 control-label">Lien vers le google sheet</label>

                            <div class="col-md-6">
                                <input id="sheet_url" type="text" class="form-control" name="sheet_url" value="{{ $team->sheet_url}}">

                                @if ($errors->has('sheet_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sheet_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('captain') ? ' has-error' : '' }}">
                            <label for="captain">Capitaine</label>
                            <select class="form-control" id="captain" name="captain">
                              @foreach ($team->users as $player)
                                <option {{ ($player->id === $team->captain->id) ? "selected='selected'" : "" }} value='{{$player->id}}'>{{$player->first_name}} {{$player->last_name}}</option>
                              @endforeach
                            </select>

                            @if ($errors->has('captain'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('captain') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input class="btn btn-green pull-right" type="submit" value="Modifier">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
