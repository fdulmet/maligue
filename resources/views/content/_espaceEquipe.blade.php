<!--<div class="row align-items-center">
    <div class="col">
        <strong class="inline-block">
            @if($user->isAdmin() || $user->isAdminLigue())
                Liste des équipes :
            @else
                Mes équipes :
            @endif
        </strong>

        <div class="dropdown dropdown-equipe">
            <a class="btn btn-secondary btn-dropdown-orange dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $currentEquipe->nom }}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach($equipes as $equipe)
                    <a class="dropdown-item" href="{{ route('switchTeam', ['equipeId' => $equipe->id]) }}">{{ $equipe->nom }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col">

    </div>
</div>-->

@if(!$myTeams->isEmpty())
<div class="row equipe-profil">
    <div class="col">
        <h4>
            <div class="dropdown dropdown-equipe">
                <a class="btn btn-secondary btn-dropdown-green dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $currentEquipe->nom }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($equipes as $equipe)
                        <a class="dropdown-item" href="{{ route('switchTeam', ['equipeId' => $equipe->id]) }}">{{ $equipe->nom }}</a>
                    @endforeach
                </div>
            </div>


            @if($user->isAdmin() || $user->isAdminLigue() || $user->isCapitaine())
                <a href="#" class="pull-right" title="Modifier nom de l'équipe" rel="tooltip" data-toggle="modal" data-target="#updateTeamName">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                @include('modals.equipe.updateTeamName')
            @endif

            @if($user->isAdmin() || $user->isAdminLigue())
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#deactivateEquipe{{ $currentEquipe->id }}">
                <span class="label label-danger">
                    <span class="glyphicon glyphicon-ban-circle" title="Désactiver l'équipe"></span>
                </span>
                </button>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addPlayer{{ $currentEquipe->id }}">
                <span class="label label-success">
                    <span class="glyphicon glyphicon-plus" title="Ajouter un joueur"></span>
                </span>
                </button>
            @endif
        </h4>

        <div class="artist-collage col-md-12">
            <div class="col-md-12">
                <div>
                    @if(!$logoAuthEquipe)
                        <p><br><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#updateTeamLogo">Ajouter logo</a></p>
                    @else
                        <div class="caption">
                            <p><a href="#" class="label label-primary" data-toggle="modal" data-target="#updateTeamLogo">Changer logo</a></p>
                        </div>
                        <img src="{{ url($logoAuthEquipe) }}" alt="logo_equipe">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col equipe-buttons">
        <!--Bouton inviter des amis-->
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#inviterAmis" id="bouton_invitation">
                    Inviter des amis
                </button>
                @if($user->isAdmin() || $user->isAdminLigue() || $user->isCapitaine())
                    <button type="button" class="btn btn-green" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
                        Modifier le capitaine d'équipe
                    </button>
                @endif
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#createNewTeam" id="bouton_createNewTeam">
                    Créer nouvelle équipe
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
            @foreach($currentJoueursEquipe as $joueur)
                <span class="list-group-item">
                    @if($joueur->isCapitaine())
                        {{ $joueur->prenom }} {{ $joueur->nom }} (capitaine)
                    @else
                        {{ $joueur->prenom }} {{ $joueur->nom }}
                    @endif
                    @if($user->isAdmin() || $user->isAdminLigue())
                        <a href="{{ route('equipe.removePlayer', ['joueur' => $joueur->id, 'equipe' => $currentEquipe->id]) }}" title="Retirer le joueur">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    @endif
                </span>
            @endforeach
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Derniers matchs :</strong>
        <br>
        <br>
        @include('content._dernierMatch')
    </div>
</div>

<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Prochains matchs :</strong>
        <br>
        <br>
        @include('content._prochainMatch')
    </div>
</div>
@endif