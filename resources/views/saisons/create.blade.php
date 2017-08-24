@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <br>
            <br>
            {!! link_to_route('saison.index', 'Liste des saisons', [], ['class' => 'btn btn-primary']) !!}
            <br>
            <br>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Créer une nouvelle saison
                    </div>
                    <div class="panel-body">
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
                            <div class='input-group date' id='datetimepicker1'>
                                {!! Form::text('date_start', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('date_end', 'Date de fin') }}
                            <div class='input-group date' id='datetimepicker2'>
                                {!! Form::text('date_end', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        {!! Form::submit('Créer', ['class' => 'btn btn-default']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection