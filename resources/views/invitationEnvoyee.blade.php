@extends('layouts/app')

@section('banner')
    @include('_banner')
@stop

@section('invitationEnvoyee')
    <div style="color : red; font-weight: bold; padding: 0.5% 0 0 0; text-align: right;">
        Votre invitation a bien été envoyée.
    </div>
@endsection

@section('content')
    @include ('_content')
@endsection

