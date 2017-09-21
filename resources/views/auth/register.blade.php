@extends('/layouts/app')

@section('banner')
    @if(Auth::guest())
        @include('_banner_guest')
    @else
        @include('_banner')
    @endif
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
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