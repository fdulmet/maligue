@if($team)
@include('components.team.modals.invite_to_team')
@include('components.team.modals.remove_player')
@include('components.team.modals.add_player')
@include('components.team.modals.update_name')
@include('components.team.modals.update_captain')
@include('components.team.modals.update_logo')
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
                                    <a class="dropdown-item" href="{{ route('switchTeam', ['equipeId' => $t->id]) }}">{{ $t->name }}</a>
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
                            <button type="button" class="btn btn-green" title="Modifier nom de l'équipe" rel="tooltip" data-toggle="modal" data-target="#updateTeamName"><i class="fa fa-edit"></i></button>
                            @if(Auth::user()->isAdmin)
                                <button type="button" class="btn btn-green" title="Désactiver l'équipe" rel="tooltip" data-toggle="modal" data-target="#deactivateEquipe{{ $team->id }}"><i class="fa fa-ban" title="Désactiver l'équipe"></i></button>
                                <button type="button" class="btn btn-green" title="Ajouter un joueur" rel="tooltip" data-toggle="modal" data-target="#addPlayer"><i class="fa fa-plus" title="Ajouter un joueur"></i></button>
                            @endif
                            @if($team->logo)
                                <button type="button" class="btn btn-green" title="Changer logo" rel="tooltip" data-toggle="modal" data-target="#updateTeamLogo"><i class="fa fa-picture-o" title="Changer logo"></i></button>
                            @endif
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

<div class="row">
    <div class="col">
        <br>
        <strong class="color-green">Effectif :</strong>
        <div class="list-group list-players">
            @foreach($team->users->take(5) as $player)
                <span class="list-group-item">
                    @if($player->id === $team->captain->id)
                        {{ $player->first_name }} {{ $player->last_name }} (capitaine)
                    @else
                        {{ $player->first_name }} {{ $player->last_name }}
                    @endif
                    @if(Auth::user()->isAdmin || $player->id === Auth::user()->id)
                        <a href="#" data-url="{{ route('team.detachPlayer', ['teamSlug' => $team->slug, 'playerId' => $player->id ])}}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                            <i class="fa fa-remove"></i>
                        </a>
                    @endif
                </span>
            @endforeach
        </div>
    </div>
    @if($team->users->count() > 5)
        <div class="col">
            <br>
            <br>
            <div class="list-group list-players">
                @foreach($team->users->splice(5)->take(5) as $player)
                    <span class="list-group-item">
                      @if($player->id === $team->captain->id)
                          {{ $player->first_name }} {{ $player->last_name }} (capitaine)
                      @else
                          {{ $player->first_name }} {{ $player->last_name }}
                      @endif
                      @if(Auth::user()->isAdmin || $player->id === Auth::user()->id)
                          <a href="#" data-url="{{ route('equipe.removePlayer', ['joueur' => $player->id, 'equipe' => $team->id]) }}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                              <i class="fa fa-remove"></i>
                          </a>
                      @endif
                </span>
                @endforeach
            </div>
        </div>
    @endif
</div>
@include('components.team.games.index')
@endif
