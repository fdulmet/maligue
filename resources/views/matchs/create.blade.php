@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    {!! link_to_route('matchs.index', 'Liste des matchs', [], ['class' => 'btn btn-green']) !!}
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        @if(!is_null($match->id))
                            Modifier un match
                        @else
                            Créer un nouveau match
                        @endif
                    </div>
                    <div class="card-block">
                        {!! Form::open(['route' => 'matchs.store', 'method' => 'post']) !!}

                        {{ csrf_field() }}

                        {{ Form::hidden('matchId', $match->id) }}

                        <div class="form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                            {{ Form::label('lieu', 'Lieu') }}
                            {!! Form::text('lieu', $match->lieu, ['class' => 'form-control', 'placeholder' => 'Urbansoccer La Défense', 'required']) !!}
                            @if ($errors->has('lieu'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lieu') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('date', 'Date') }}
                            <div class="col-4" style="padding: 0">
                                <input name="date" class="form-control" type="datetime-local" value="{{ \Carbon\Carbon::parse($match->date)->format('Y-m-d\T') }}{{ \Carbon\Carbon::parse($match->heure)->format('H:i') }}">
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
                            <?php $equipe1 = !is_null($match->id) ? $match->equipes()->get()->first()->id : []; ?>
                            {{ Form::select('equipe1', $teams, $equipe1, ['class' => 'form-control', 'placeholder' => 'Sélectionner la première équipe...']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('equipe2', 'Equipe 2') }}
                            <?php $equipe2 = !is_null($match->id) ? $match->equipes()->get()->last()->id : []; ?>
                            {{ Form::select('equipe2', $teams, $equipe2, ['class' => 'form-control', 'placeholder' => 'Sélectionner la seconde équipe...']) }}
                        </div>

                        @if(!is_null($match->id))
                            <hr>

                            <h3>Report du match</h3>

                            <div class="form-group">
                                {{ Form::label('lieu_report', 'Lieu') }}
                                {!! Form::text('lieu_report', $match->lieu_report, ['class' => 'form-control', 'placeholder' => 'Urbansoccer La Défense']) !!}
                            </div>

                            <div class="form-group">
                                {{ Form::label('date_report', 'Date') }}
                                <div class="col-4" style="padding: 0">
                                    <input name="date_report" class="form-control" type="datetime-local" value="@if(!is_null($match->date_report)){{ \Carbon\Carbon::parse($match->date_report)->format('Y-m-d\T') }}{{ \Carbon\Carbon::parse($match->heure)->format('H:i') }}@endif">
                                </div>
                            </div>
                        @endif

                        @if(!is_null($match->id))
                            {!! Form::submit('Modifier', ['class' => 'btn btn-green pull-right']) !!}
                        @else
                            {!! Form::submit('Créer', ['class' => 'btn btn-green pull-right']) !!}
                        @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection