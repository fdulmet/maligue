{!! Form::open(['url' => 'tests']) !!}

    <div class="form-group">
        {!! Form::label('nom', 'Nom :') !!}
        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('prenom', 'Prenom :') !!}
        {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email :') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Mot de passe :') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}