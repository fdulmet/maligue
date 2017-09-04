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
    @include('modals.equipe.retirerJoueur')
    @include('modals.invitations.vueInviterAmis')
    @include('modals.invitations.vueInviterAmisCreer')
    @include('modals.contact.vueContact')
    @include('modals.profilJoueur.vueProfilJoueur')
    @include('modals.equipe.updateTeamName')

    @include('layouts.modal', ['id' => 'coordonneesCapitaines', 'titre' => 'Coordonnées capitaines', 'body' => 'modals.vueCoordonneesCapitaines'])
    @include('layouts.modal', ['id' => 'effectifsEquipes', 'titre' => 'Effectifs équipes', 'body' => 'modals.vueEffectifsEquipes'])
    @include('layouts.modal', ['id' => 'reglesFootACinq', 'titre' => 'Règles foot-à-5', 'body' => 'modals.vueReglesFootACinq'])
    @include('layouts.modal', ['id' => 'reglesReports', 'titre' => 'Règlement pour les reports', 'body' => 'modals.vueReglesReports'])

    @if($user->isAdmin() || $user->isAdminLigue())
        @include('modals.equipe.deactivateTeam')
    @endif
@endsection

