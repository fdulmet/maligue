@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    @include ('_content')
@endsection

@section('modals')
    @include('modals.equipe.updateCapitaine')
    @include('modals.equipe.updateTeamLogo')
    @include('modals.equipe.createNewTeam')
    @include('modals.invitations.vueInviterAmis')
@endsection

