@extends('/layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="encart_connexion">
                    <div class="panel-heading" id="titreConnexion">
                        Inscription
                    </div>
                    <div class="panel-body" id="contenu_encart_connexion">
                        <!--Login facebook-->
                        <br>
                        <a href="login/facebook" class="btn btn-primary form-control" id="bouton_connexion_facebook">Inscription Facebook</a>
                        <p>
                            <b>OU</b>
                        </p>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <?php
                            if (isset($_GET['equipe'])) {
                                echo $_GET['equipe'];
                                $type = 'hidden';
                                $value = $_GET['equipe'];
                            }
                            else {
                                echo '';
                                $type = 'text';
                                $value = '';
                            }
                            ?>
                            <div class="form-group{{ $errors->has('equipe') ? ' has-error' : '' }}" id="formulaire">
                                <div class="col-md-12">
                                    <input value="<?php echo $value; ?>" id="equipe" type="<?php echo $type; ?>" class="form-control" name="equipe" placeholder="Les Chauds" required autofocus>
                                    @if ($errors->has('equipe'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('equipe') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}" id="formulaire">
                                <div class="col-md-12">
                                    <input id="nom" type="text" class="form-control" name="nom" placeholder="Ben Arfa" required autofocus>
                                    @if ($errors->has('nom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}" id="formulaire">
                                <div class="col-md-12">
                                    <input id="prenom" type="text" class="form-control" name="prenom" placeholder="Hatem" required autofocus>
                                    @if ($errors->has('prenom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="formulaire">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="hatembenarfa@gmail.com" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="formulaire">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="******" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group" id="formulaire">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="******" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" id="bouton_connexion">
                                        Inscription
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default paqnel-body" id="bouton_inscription">
                    <a href="{{ url('login') }}" class="btn btn-link btn-primary form-control">
                        Connexion (si déjà inscrit)
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection