@extends('/layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="encart_connexion">
                    <div class="panel-heading" id="titreConnexion">
                        Inscription
                    </div>
                    @include('auth._registerForm')
            </div>
        </div>
    </div>
@endsection