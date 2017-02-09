@extends('template')



<!--
//@section ('petit_test)
    <div id="petittest">Salut</div>
//@stop
        -->
@section('nom_ligue')
    <?php
    $nom_ligue='La ligue des Pingouins'; //faire venir de bdd
    echo $nom_ligue;
    ?>
@stop

@section('content')
    @include('tests._banner', ['heading'=>'La ligue des Pingouins', 'body'=>'bienvenue'])
    <div class="container">

        <div class="alert alert-success">
            <!--pour changer la couleur, je vais chercher dans node_modules/bootstrap-sass/assets/stylesheets/bootstrap/_variables.scss-->
            <!--et je cc les lignes qui m'intéressent dans resources/assets/sass/partials/_variables.scss-->
            ceci est un message d'alerte
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2> Bonjour {{ $prenom }} {{ $nom }}.</h2>
            </div>
            <div class="col-md-6">
                <h2>lala</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2> Bonjour {{ $prenom }} {{ $nom }}.</h2>
            </div>
            <div class="col-md-4">
                <h2>lala</h2>
            </div>
            <div class="col-md-4">
                <h2>lala</h2>
            </div>
        </div>
    </div>
@stop
