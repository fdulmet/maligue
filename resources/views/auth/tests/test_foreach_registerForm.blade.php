<div class="panel-body" id="contenu_encart_connexion">
    <!--Login facebook: <br> <a href="login/facebook" class="btn btn-primary form-control" id="bouton_connexion_facebook">Inscription Facebook</a> <p> <b>OU</b> </p>-->

    <!--Inscription formulaire-->
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <!--Champs équipe, nom, prénom, email, mdp-->
        <?php
        if (isset($_GET['equipe'])){
            $type = 'hidden';
            $value = $_GET['equipe'];
        }
        else{
            $type = 'text';
            $value = '';
        }
        $datas =[
            [$info='equipe', $label='Equipe', $name='equipe', $placeholder='Les Chauds', $has='equipe', $first='equipe'],
            [$info='nom', $label='Nom', $name='nom', $placeholder='Ben Arfa', $has='nom', $first='nom'],
            [$info='email', $label='Email', $name='email', $placeholder='hatembenarfe@gmail.com', $has='email', $first='email'],
        ];
        ?>
        @foreach($datas as $data)
            <div class="col-md-12 form-group{{ $errors->has($data[$info]) ? ' has-error' : '' }}" id="formulaire">
                <label class="control-label col-md-6">{{ $data[$label] }}</label>
                <input value="{{ $value }}" id="equipe" type="{{ $type }}" class="form-control col-md-6" name="{{ $data[$name] }}" placeholder="{{ $data[$placeholder] }}" required autofocus>
                @if ($errors->has($has))
                    <span class="help-block">
                        <strong>{{ $errors->first($first) }}</strong>
                    </span>
                @endif
            </div>
        @endforeach

        <div class="col-md-12 form-group{{ $errors->has($password) ? ' has-error' : '' }}" id="formulaire">
            <label class="control-label col-md-6">Mot de passe</label>
            <input value="{{ $value }}" id="equipe" type="password" class="form-control col-md-6" name="password" placeholder="******" required autofocus>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-12 form-group" id="formulaire">
            Répéter mot de passe
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="******" required>
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-primary" id="bouton_connexion">
                Inscription
            </button>
        </div>
    </form>
</div>

<div class="panel panel-default paqnel-body" id="bouton_inscription">
    <a href="{{ url('login') }}" class="btn btn-link btn-primary form-control">
        Connexion (si déjà inscrit)
    </a>
</div>