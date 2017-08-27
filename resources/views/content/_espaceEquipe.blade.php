<div class="row">
    <div class="col-md-12 watch-card">
        <div class="artist-title col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <strong>{{ $nomAuthEquipe }}</strong>
                        <a href="#" class="pull-right" title="Modifier nom de l'équipe" data-toggle="modal" data-target="#updateTeamName">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        @include('modals.equipe.updateTeamName')
                    </h4>
                </div>
            </div>
            <!--Bouton inviter des amis-->
            <div class="row">
                <div class="col-md-12">
                    @include('modals.invitations.boutonInviterAmis')
                    @include('modals.invitations.vueInviterAmis')

                    @include('modals.equipe.updateCapitaine')
                </div>
            </div>
        </div>
        <div class="artist-collage col-md-12">
            <div class="col-md-12">
                <img src="{{ url($logoAuthEquipe) }}" alt="logo_equipe">
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
                                <li>{{ $joueur->prenom }} {{ $joueur->nom }} <span><span class="glyphicon glyphicon-king"></span></span></li>
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