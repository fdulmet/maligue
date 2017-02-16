<div class="row" id="dialogProfilJoueur" title="Profil Joueur">

    {{ Auth::user()->prenom }}


    {!! Form::model($user, ['method'=>'PATCH', 'action' => ['Controller@update', $user->id]]) !!}
    <!-- on peut aussi utiliser route ou url : 'url' => 'joueurs/' . $joueur->id]-->
    <!-- c'est pour renvoyer sur une autre page une fois submitted-->
    @include('joueurs._form', ['texteDuBouton' => 'Modifier'])
    {!! Form::close() !!}

    {!! Form::open(['url' => 'tests']) !!}

        <div class="form-group">
            {!! Form::label('nom', 'Nom :') !!}
            {!! Form::text('nom', 'valeur défaut', ['class' => 'form-control']) !!}
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
</div>


<!--
    $nouveauPrenom = 'Daniel';

    DB::table('users')
    ->where('id', 1)
    ->update(['prenom' => $nouveauPrenom]);
-->

