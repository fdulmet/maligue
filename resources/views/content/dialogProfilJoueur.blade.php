<div class="row" id="dialogProfilJoueur" title="Profil Joueur">

    {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
    <br>La New Team
    <br>La ligue des pingouins
    <div>{{ Auth::user()->email }}</div>
    <div>changer de mot de passe</div>
    <div>Modifier infos</div>

    <!--{ !! Form::model($user, ['method'=>'PATCH', 'action' => ['Controller@ update', $user->id]]) !!}-->
    <!-- on peut aussi utiliser route ou url : 'url' => 'joueurs/' . $joueur->id]-->
    <!-- c'est pour renvoyer sur une autre page une fois submitted-->
    <!--@ include('joueurs._form', ['texteDuBouton' => 'Modifier'])-->

    {!! Form::open(['url' => 'tests']) !!}

        <div class="form-group">
            {!! Form::text('nom', 'valeur défaut', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
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

