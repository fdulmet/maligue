<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

    {{ csrf_field() }}

    <?php
    if (isset($_GET['equipe'])){
        $type = 'hidden';
        $value = $_GET['equipe'];
    }
    else{
        $type = 'text';
        $value = '';
    }
    ?>

    <div class="form-group{{ $errors->has('equipe') ? ' has-error' : '' }}" id="formulaire">
        <input value="{{ $value }}" id="equipe" type="{{ $type }}" class="form-control" name="equipe" placeholder="Nom de l'équipe" required autofocus>
        @if ($errors->has('equipe'))
        <span class="help-block">
            <strong>{{ $errors->first('equipe') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}" id="formulaire">
        <input value="{{ $value }}" id="equipe" type="{{ $type }}" class="form-control" name="prenom" placeholder="Hatem" required autofocus>
        @if ($errors->has('prenom'))
        <span class="help-block">
            <strong>{{ $errors->first('prenom') }}</strong>
        </span>
        @endif
    </div>

    <div class=" form-group{{ $errors->has('nom') ? ' has-error' : '' }}" id="formulaire">
        <input value="{{ $value }}" id="equipe" type="{{ $type }}" class="form-control" name="nom" placeholder="Ben Arfa" required autofocus>
        @if ($errors->has('nom'))
        <span class="help-block">
            <strong>{{ $errors->first('nom') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="formulaire">
        <input value="{{ $value }}" id="equipe" type="{{ $type }}" class="form-control" name="email" placeholder="hatembenarfa@gmail.com" required autofocus>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class=" form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="formulaire">
        <input value="{{ $value }}" id="equipe" type="password" class="form-control" name="password" placeholder="mot de passe" required autofocus>
        @if ($errors->has('password'))
        <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group" id="formulaire">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="répéter le mot de passe" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="bouton_connexion">
            Inscription
        </button>
    </div>

</form>

