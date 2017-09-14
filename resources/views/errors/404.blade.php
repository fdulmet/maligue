@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container-fluid no-season">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Erreur 404
                    </div>
                    <div class="card-block">
                        <p>Whoops, looks like something went wrong</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('modals.contact.vueContact')
@endsection