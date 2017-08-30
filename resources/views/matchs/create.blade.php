@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <br>
            <br>
            {!! link_to_route('matchs.index', 'Liste des matchs', [], ['class' => 'btn btn-primary']) !!}
            <br>
            <br>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Créer un nouveau match
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'matchs.store', 'method' => 'post']) !!}

                        {{ csrf_field() }}

                        <div class=" form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                            {{ Form::label('lieu', 'Lieu') }}
                            {!! Form::text('lieu', null, ['class' => 'form-control', 'placeholder' => 'Urbansoccer La Défense', 'required']) !!}
                            @if ($errors->has('lieu'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lieu') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('date', 'Date') }}
                            <div class='input-group date' id='datetimepickermatch'>
                                {!! Form::text('date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('ligue', 'Ligue') }}
                            {{ Form::text('ligue', $currentLigue->nom, ['disabled', 'class' => 'form-control']) }}
                            {{ Form::hidden('ligue_id', $currentLigue->id) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('saison', 'Saison') }}
                            {{ Form::text('saison', $currentSaison->nom, ['disabled', 'class' => 'form-control']) }}
                            {{ Form::hidden('season_id', $currentSaison->id) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('equipe1', 'Equipe 1') }}
                            {{ Form::select('equipe1', $teams, null, ['class' => 'form-control', 'placeholder' => 'Sélectionner la première équipe...']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('equipe2', 'Equipe 2') }}
                            {{ Form::select('equipe2', $teams, null, ['class' => 'form-control', 'placeholder' => 'Sélectionner la seconde équipe...']) }}
                        </div>

                        {!! Form::submit('Créer', ['class' => 'btn btn-default']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection