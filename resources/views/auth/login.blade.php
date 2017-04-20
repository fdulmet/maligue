@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default" id="encart_connexion">
                <div class="panel-heading" id="titreConnexion">
                    Connexion
                </div>
                <div class="panel-body" id="contenu_encart_connexion">
                    <br>
                    @include('auth/_loginForm')
                </div>
            </div>
        </div>

    </div>
</div>
@endsection