<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="formulaire">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block" id="champs">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
    @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="formulaire">
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block" id="champs">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <a class="btn btn-link" href="{{ url('/password/reset') }}" id="mdp_oublie">
            Mot de passe oublié ?
        </a>
    </div>

    <br>

    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="bouton_connexion">
            Connexion
        </button>
    </div>
    {{-- <div class="form-group">
        <div>
            <div class="checkbox" id="se_souvenir_de_moi">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                    Se souvenir de moi
                </label>
            </div>
        </div>
    </div> --}}
</form>




