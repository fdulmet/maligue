@extends('/layouts/app')

@section('banner')
    @include('_banner_guest')
@endsection

@section('content')
<div class="container-fluid content-login">
    <div class="row align-items-center">
    <!--
        <div class="col-md-5 offset-md-2">
            <div id="pvu">
                <h3>
                    Ma ligue de foot à 5
                </h3>
                <br>
                <ul>
                    <li>une orga simple</li>
                    <li>des équipes qui sont potes</li>
                    <li>des cadeaux pour les vainqueurs</li>
                </ul>
                <br>
                <a href="{{ route('ajoutLigue') }}" class="btn btn-orange btn-block">
                    {{ trans('login.new_ligue_btn') }}
                </a>
            </div>
        </div>
-->
        <div class="col-md-6 offset-md-4">
            @include('auth/_loginForm')
        </div>
    </div>
</div>
@endsection
