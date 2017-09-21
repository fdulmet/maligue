@extends('/layouts/app')

@section('banner')
    @if(Auth::guest())
        @include('_banner_guest')
    @else
        @include('_banner')
    @endif
@endsection

@section('content')
    <div class="container-fluid no-season">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Attention
                    </div>
                    <div class="card-block">
                        <p>Votre administrateur de ligue n'a pas encore créé de saison, veuillez revenir plus tard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('modals.contact.vueContact')
    @include('modals.profilJoueur.vueProfilJoueur')
@endsection