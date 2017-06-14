@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default" id="encart_connexion">
                <div class="panel-heading" id="titreConnexion">
                    Connexion
                </div>
                <div class="panel-body" id="contenu_encart_connexion">
                    <br>
                    @include('auth/_loginForm')
                </div>
            </div>
            <div id="pvu">
                <h3>
                    Ma ligue de foot à 5
                    <br>
                </h3>
                - une orga simple<br>
                - des équipes qui sont potes<br>
                - des cadeaux pour les vainqueurs
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default" id="encart_connexion">
                <div class="panel-heading" id="titreConnexion">
                    Inscription
                </div>
                <div class="panel-body" id="contenu_encart_connexion">
                    <br>
                    @include('auth._registerForm')
                </div>
            </div>
        </div>

    </div>
</div>
@endsection