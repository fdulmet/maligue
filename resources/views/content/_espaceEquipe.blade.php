<div class="row">
    <div class="col-md-12">
        <br>
        {!! Form::open(['route' => 'switchTeam', 'method' => 'get']) !!}

            @if($user->isAdmin() || $user->isAdminLigue())
                {!! Form::label('equipe', 'Liste des équipes :') !!}
            @else
                {!! Form::label('equipe', 'Mes équipes :') !!}
            @endif

            {!! Form::select('equipeId', $myTeams, $currentEquipe->id, ['id' => 'switchTeam', 'class' => 'form-control']) !!}

        {!! Form::close() !!}
    </div>
</div>

@if(!$myTeams->isEmpty())
<div class="row">
    <div class="col-md-12 watch-card">
        <div class="artist-title col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <strong>{{ $nomAuthEquipe }}</strong>
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
                </div>
            </div>
            <!--Bouton inviter des amis-->
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#inviterAmis" id="bouton_invitation">
                        Inviter des amis
                    </button>
                    @if($user->isAdmin() || $user->isAdminLigue() || $user->isCapitaine())
                    <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
                        Modifier le capitaine d'équipe
                    </button>
                    @endif
                    <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#createNewTeam" id="bouton_createNewTeam">
                        Créer nouvelle équipe
                    </button>
                </div>
            </div>
        </div>
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
        <div class="listing-tab col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li role="presentation" class="active"><a href="#effectif" aria-controls="effectif" role="tab" data-toggle="tab">Effectif</a></li>
                <!--<li role="presentation"><a href="#albums" aria-controls="albums" role="tab" data-toggle="tab">Albums</a></li>-->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="effectif">
                    <ul>
                        @foreach($currentJoueursEquipe as $joueur)
                            <li>
                            @if($joueur->isCapitaine())
                                {{ $joueur->prenom }} {{ $joueur->nom }} <span><span class="glyphicon glyphicon-king" rel="tooltip" title="Capitaine"></span></span>
                            @else
                                {{ $joueur->prenom }} {{ $joueur->nom }}
                            @endif
                            @if($user->isAdmin() || $user->isAdminLigue())
                                <a href="{{ route('equipe.removePlayer', ['joueur' => $joueur->id, 'equipe' => $currentEquipe->id]) }}" title="Retirer le joueur">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                    <div class="related-artist">
                        <h3>Derniers matchs</h3>
                        <div class="col-md-12">
                            @include('content._dernierMatch')
                        </div>
                    </div>
                    <div class="related-artist">
                        <h3>Prochains matchs</h3>
                        <div class="col-md-12">
                            @include('content._prochainMatch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif