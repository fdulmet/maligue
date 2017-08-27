<form class="form-horizontal" role="form" method="POST" action="{{ route('addLigue') }}">

    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('ligue') ? ' has-error' : '' }}" id="formulaire">
        <input
            id="ligue" class="form-control" name="ligue"
            placeholder="Nom de la ligue *" required
                @if ( isset($ligue) ) value="{{ $ligue }}" disabled @endif
            >

        @if ( isset($ligue) )
            <input type="hidden" name="hidden_ligue" value="{{ $ligue }}">
        @endif

        @if ($errors->has('ligue'))
            <span class="help-block">
            <strong>{{ $errors->first('ligue') }}</strong>
        </span>

        @endif
    </div>

    <div class="form-group{{ $errors->has('equipe') ? ' has-error' : '' }}" id="formulaire">
        <input
            id="equipe" class="form-control" name="equipe"
            placeholder="Nom de l'équipe *" required
            @if ( isset($equipe) ) value="{{ $equipe }}" disabled @endif
        >

        @if ( isset($equipe) )
            <input type="hidden" name="hidden_equipe" value="{{ $equipe }}">
        @endif

        @if ($errors->has('equipe'))
        <span class="help-block">
            <strong>{{ $errors->first('equipe') }}</strong>
        </span>
        @endif
    </div>

    <div class=" form-group{{ $errors->has('nom') ? ' has-error' : '' }}" id="formulaire">
        <input id="equipe" type="text" class="form-control" name="nom" placeholder="Ben Arfa *" required>
        @if ($errors->has('nom'))
        <span class="help-block">
            <strong>{{ $errors->first('nom') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}" id="formulaire">
        <input id="equipe" type="text" class="form-control" name="prenom" placeholder="Hatem *" required>
        @if ($errors->has('prenom'))
        <span class="help-block">
            <strong>{{ $errors->first('prenom') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="formulaire">
        <input id="equipe" type="text" class="form-control" name="email" placeholder="hatembenarfa@gmail.com *" required>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}" id="formulaire">
        <input id="equipe" type="text" class="form-control" name="tel" placeholder="0612345678">
        @if ($errors->has('tel'))
        <span class="help-block">
            <strong>{{ $errors->first('tel') }}</strong>
        </span>
        @endif
    </div>

    <div class=" form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="formulaire">
        <input id="equipe" type="password" class="form-control" name="password" placeholder="mot de passe *" required>
        @if ($errors->has('password'))
        <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group" id="formulaire">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="répéter le mot de passe *" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="bouton_connexion">
            Inscription
        </button>
    </div>

</form>

