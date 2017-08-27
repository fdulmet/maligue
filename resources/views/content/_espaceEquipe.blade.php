<div class="row">
    <div class="col-md-12">
        {!! Form::open(['route' => 'switchTeam', 'method' => 'get']) !!}

            {!! Form::label('equipe', 'Mes équipes :') !!}
            {!! Form::select('equipe', [], null, ['class' => 'form-control']) !!}

        {!! Form::close() !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 watch-card">
        <div class="artist-title col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <strong>{{ $nomAuthEquipe }}</strong>
                        <a href="#" class="pull-right" title="Modifier nom de l'équipe" rel="tooltip" data-toggle="modal" data-target="#updateTeamName">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        @include('modals.equipe.updateTeamName')
                    </h4>
                </div>
            </div>
            <!--Bouton inviter des amis-->
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#inviterAmis" id="bouton_invitation">
                        Inviter des amis
                    </button>
                    <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
                        Modifier le capitaine d'équipe
                    </button>
                    <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#createNewTeam" id="bouton_createNewTeam">
                        Créer nouvelle équipe
                    </button>
                </div>
            </div>
        </div>
        <div class="artist-collage col-md-12">
            <div class="col-md-12">
                <div class="thumbnail">
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
                            @if($joueur->isCapitaine())
                                <li>{{ $joueur->prenom }} {{ $joueur->nom }} <span><span class="glyphicon glyphicon-king" rel="tooltip" title="Capitaine"></span></span></li>
                            @else
                                <li>{{ $joueur->prenom }} {{ $joueur->nom }}</li>
                            @endif
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