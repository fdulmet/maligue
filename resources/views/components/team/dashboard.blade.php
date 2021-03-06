@if($team)
@include('components.team.modals.invite_to_team')
@include('components.team.modals.remove_player')
@include('components.team.modals.add_player')
@include('components.team.modals.update_name')
@include('components.team.modals.update_captain')
@include('components.team.modals.update_logo')
@include('components.team.modals.deactivate_team')
@include('components.team.modals.payments_sheet')
@include('components.team.modals.manage_players')
<div class="row equipe-profil no-gutters">
    <div class="artist-collage col-md-2">
        @if(!$team->logo)
            <p><br><a href="#" class="btn btn-orange" data-toggle="modal" data-target="#updateTeamLogo">Ajouter logo</a></p>
        @else
            <img src="{{ url($team->logo) }}" alt="logo_equipe">
        @endif
    </div>
    <div class="col-md-10">

        <div class="row no-gutters">
            <div class="col">
                @if(count(Auth::user()->teams) > 1)
                    <h4>
                        <div class="dropdown dropdown-equipe">
                            <a class="btn btn-secondary btn-dropdown-green dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $team->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach(Auth::user()->teams as $t)
                                  @if ($t->leagues->where('id', $league->id)->count() >= 1)
                                    <a class="dropdown-item" href="{{ route('league.season.team.dashboard', [ 'leagueSlug' => $league->slug,
                                                                                                              'seasonSlug' => $season->slug,
                                                                                                              'teamSlug' => $t->slug,
                                                                                                            ]) }}">{{ $t->name }}</a>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </h4>
                @else
                    <h4 class="team-name">{{ $team->name }}</h4>
                @endif

                @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id)
                    <div class="btn-group btn-group-sm" role="group">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-green" data-toggle="modal" data-target="#updateTeamName"><i data-toggle="tooltip" title="Modifier nom de l'équipe"  class="fa fa-edit"></i></button>
                            @if(Auth::user()->isAdmin)
                                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#deactivateEquipe"><i class="fa fa-ban" data-toggle="tooltip" title="Désactiver l'équipe"></i></button>
                                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#addPlayer"><i class="fa fa-plus" data-toggle="tooltip" title="Ajouter un joueur"></i></button>
                            @endif

                            <button type="button" class="btn btn-green" data-toggle="modal" data-target="#updateTeamLogo"><i class="fa fa-picture-o" data-toggle="tooltip" title="Changer logo"></i></button>
                            <button type="button" class="btn btn-green" data-toggle="modal" data-target="#paymentsSheet"><i class="fa fa-eur" data-toggle="tooltip" title="Etat des paiements"></i></button>

                        </div>
                    </div>
                @endif
            </div>
        </div>


        <!--Bouton inviter des amis-->
        <div class="row">
            <div class="col-md-12 equipe-buttons">
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#inviterAmisRejoindre" id="bouton_invitation_rejoindre">
                    Inviter à rejoindre {{ $team->name }}
                </button>
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#managePlayers" id="bouton_managePlayers">
                    Joueurs
                </button>
                @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id)
                    <button type="button" class="btn btn-green" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
                        Modifier le capitaine
                    </button>
                @endif
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#inviterAmisCreer" id="bouton_invitation_creer">
                    Inviter à créer une équipe
                </button>
            </div>
        </div>
    </div>
</div>

@include('components.team.games.index')
@endif
