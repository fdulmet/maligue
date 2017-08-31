@extends('/layouts/app')

@section('banner')
    @if(Auth::guest())
        @include('_banner_guest')
    @else
        @include('_banner')
    @endif
@endsection

@section('content')
    @include ('_content')
@endsection

@section('modals')
    @include('modals.equipe.updateCapitaine')
    @include('modals.equipe.updateTeamLogo')
    @include('modals.equipe.createNewTeam')
    @include('modals.invitations.vueInviterAmis')
    @include('modals.contact.vueContact')
    @include('modals.profilJoueur.vueProfilJoueur')

    @if($user->isAdmin() || $user->isAdminLigue())
        @include('modals.equipe.deactivateTeam')
    @endif
@endsection

