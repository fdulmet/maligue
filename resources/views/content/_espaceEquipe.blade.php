
@if(!$myTeams->isEmpty())
<div class="row equipe-profil">
    <div class="col-md-4">
        <div class="row">
            <div class="col">
            @if($user->equipes()->count() > 1)
                <h4>
                    <div class="dropdown dropdown-equipe">
                        <a class="btn btn-secondary btn-dropdown-green dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $currentEquipe->nom }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @if($user->isAdmin() || $user->isAdminLigue())
                                @foreach($currentLigue->equipes()->get() as $equipe)
                                    <a class="dropdown-item" href="{{ route('switchTeam', ['equipeId' => $equipe->id]) }}">{{ $equipe->nom }}</a>
                                @endforeach
                            @else
                                @foreach($user->equipes()->get() as $equipe)
                                    <a class="dropdown-item" href="{{ route('switchTeam', ['equipeId' => $equipe->id]) }}">{{ $equipe->nom }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </h4>
            @else
                <h4 class="team-name">{{ $currentEquipe->nom }}</h4>
            @endif
            </div>
        </div>

        @if($user->isAdmin() || $user->isAdminLigue() || $user->isCapitaine())
        <div class="row">
            <div class="col">
                <div class="btn-group btn-group-sm" role="group">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-green" title="Modifier nom de l'équipe" rel="tooltip" data-toggle="modal" data-target="#updateTeamName"><i class="fa fa-edit"></i></button>
                        @if($user->isAdmin() || $user->isAdminLigue())
                            <button type="button" class="btn btn-green" title="Désactiver l'équipe" rel="tooltip" data-toggle="modal" data-target="#deactivateEquipe{{ $currentEquipe->id }}"><i class="fa fa-ban" title="Désactiver l'équipe"></i></button>
                            <button type="button" class="btn btn-green" title="Ajouter un joueur" rel="tooltip" data-toggle="modal" data-target="#addPlayer{{ $currentEquipe->id }}"><i class="fa fa-plus" title="Ajouter un joueur"></i></button>
                        @endif
                        @if($logoAuthEquipe)
                            <button type="button" class="btn btn-green" title="Changer logo" rel="tooltip" data-toggle="modal" data-target="#updateTeamLogo"><i class="fa fa-picture-o" title="Changer logo"></i></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="artist-collage col">
            @if(!$logoAuthEquipe)
                <p><br><a href="#" class="btn btn-oragen" data-toggle="modal" data-target="#updateTeamLogo">Ajouter logo</a></p>
            @else
                <img src="{{ url($logoAuthEquipe) }}" alt="logo_equipe">
            @endif
        </div>
    </div>
    <div class="col equipe-buttons">
        <!--Bouton inviter des amis-->
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#inviterAmisRejoindre" id="bouton_invitation_rejoindre">
                    Inviter à rejoindre mon équipe
                </button>
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#inviterAmisCreer" id="bouton_invitation_creer">
                    Inviter à créer une équipe
                </button>
                <br>
                <br>
                @if($user->isAdmin() || $user->isAdminLigue() || $user->isCapitaine())
                    <button type="button" class="btn btn-green" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
                        Modifier le capitaine d'équipe
                    </button>
                @endif
                <!--
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#createNewTeam" id="bouton_createNewTeam">
                    Créer une nouvelle équipe
                </button>
                -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <br>
        <strong class="color-green">Effectif :</strong>
        <div class="list-group list-players">
            @foreach($currentJoueursEquipe->take(5) as $joueur)
                <span class="list-group-item">
                    @if($joueur->isCapitaine())
                        {{ $joueur->prenom }} {{ $joueur->nom }} (capitaine)
                    @else
                        {{ $joueur->prenom }} {{ $joueur->nom }}
                    @endif
                    @if(($user->isAdmin() || $user->isAdminLigue()) && $joueur->id !== $user->id)
                        <a href="#" data-url="{{ route('equipe.removePlayer', ['joueur' => $joueur->id, 'equipe' => $currentEquipe->id]) }}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                            <i class="fa fa-remove"></i>
                        </a>
                    @endif
                </span>
            @endforeach
        </div>
    </div>
    @if($currentJoueursEquipe->count() > 5)
        <div class="col">
            <br>
            <br>
            <div class="list-group list-players">
                @foreach($currentJoueursEquipe->splice(5)->take(5) as $joueur)
                    <span class="list-group-item">
                    @if($joueur->isCapitaine())
                            {{ $joueur->prenom }} {{ $joueur->nom }} (capitaine)
                        @else
                            {{ $joueur->prenom }} {{ $joueur->nom }}
                        @endif
                        @if(($user->isAdmin() || $user->isAdminLigue()) && $joueur->id !== $user->id)
                            <a href="#" data-url="{{ route('equipe.removePlayer', ['joueur' => $joueur->id, 'equipe' => $currentEquipe->id]) }}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                            <i class="fa fa-remove"></i>
                        </a>
                        @endif
                </span>
                @endforeach
            </div>
        </div>
    @endif
</div>

<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Derniers matchs :</strong>
        <br>
        <br>
        <div class="scrollbar scrollToBottom" id="style-4" style="max-height: 7rem; overflow: auto;">
            <div class="force-overflow"></div>
            @include('content._dernierMatch')
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Prochains matchs :</strong>
        <br>
        <br>
        <div class="scrollbar" id="style-4" style="max-height: 4rem; overflow: auto;">
            <div class="force-overflow"></div>
            @include('content._prochainMatch')
        </div>
    </div>
</div>
@endif