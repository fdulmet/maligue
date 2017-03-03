@extends('/layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="encart_connexion">
                <div class="panel-heading" id="titreConnexion">Connexion</div>
                <div class="panel-body" id="contenu_encart_connexion">

                    <!--Login facebook-->
                    <br>
                    <a href="login/facebook" class="btn btn-primary form-control" id="bouton_connexion_facebook">Connexion Facebook</a>
                    <p>
                        <b>OU</b>
                    </p>

                    <!--Login formulaire-->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="formulaire">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block" id="champs">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="formulaire">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block" id="champs">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}" id="mdp_oublie">
                                Mot de passe oublié ?
                            </a>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-offset-5 col-md-3">
                                    <button type="submit" class="btn btn-primary" id="bouton_connexion">
                                        Connexion
                                    </button>
                                </div>
                                <div class="col-md-3" style="padding:0; padding-left:-10px; padding-top:5px;">
                                    <div class="checkbox" id="se_souvenir_de_moi">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default paqnel-body" id="bouton_inscription">
                <a href="{{ url('register') }}"class="btn btn-link btn-primary form-control">
                    Inscription
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

