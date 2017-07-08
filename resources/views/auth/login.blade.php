@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
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
                <ul>
                    <li>une orga simple</li>
                    <li>des équipes qui sont potes</li>
                    <li>des cadeaux pour les vainqueurs</li>
                </ul>
                <a href="{{ route('ajoutLigue') }}" class="btn btn-default btn-block">
                    {{ trans('login.new_ligue_btn') }}
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
