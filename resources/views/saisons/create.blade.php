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
                    {!! link_to_route('saison.index', 'Liste des saisons', [], ['class' => 'btn btn-green']) !!}
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Créer une nouvelle saison
                    </div>
                    <div class="card-block">
                        {!! Form::open(['route' => 'saison.store', 'method' => 'post']) !!}

                        {{ csrf_field() }}

                        <div class=" form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            {{ Form::label('nom', 'Nom de la saison') }}
                            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Automne 2017', 'required']) !!}
                            @if ($errors->has('nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('ligue', 'Ligue') }}
                            {{ Form::select('ligue', $ligues, null, ['class' => 'form-control', 'placeholder' => 'Sélectionner la ligue...']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('date_start', 'Date de début') }}
                            <div class="col-4" style="padding: 0">
                                <input name="date_start" class="form-control" type="date" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('date_end', 'Date de fin') }}
                            <div class="col-4" style="padding: 0">
                                <input name="date_end" class="form-control" type="date" value="">
                            </div>
                        </div>

                        {!! Form::submit('Créer', ['class' => 'btn btn-green pull-right']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection