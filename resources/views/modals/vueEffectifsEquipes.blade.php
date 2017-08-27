@foreach($equipes as $equipe)
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <div class="media">
                        <div class="logoEquipe pull-left">
                            @if($equipe->logo != '')
                                <img src="{{ url($equipe->logo) }}">
                            @else
                                <img src="">
                            @endif
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <strong>{{ $equipe->nom }}</strong>
                                @if($user->isAdmin() || $user->isAdminLigue())
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#deactivateEquipe{{ $equipe->id }}">
                                    <span class="label label-danger">
                                        <span class="glyphicon glyphicon-ban-circle" title="Désactiver l'équipe"></span>
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addPlayer{{ $equipe->id }}">
                                    <span class="label label-success">
                                        <span class="glyphicon glyphicon-plus" title="Ajouter un joueur"></span>
                                    </span>
                                    </button>
                                @endif
                            </h4>

                            @if($user->isAdmin() || $user->isAdminLigue())
                            <div id="deactivateEquipe{{ $equipe->id }}" class="modal modal-inside" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"> Êtes-vous sûr de vouloir désactiver l'équipe {{ $equipe->nom }} ?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            {!! link_to_route('equipe.deactivate', 'Oui', ['id' => $equipe->id], ['class' => 'btn-link']) !!}
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="addPlayer{{ $equipe->id }}" class="modal modal-inside" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"> Ajouter un joueur à l'équipe {{ $equipe->nom }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.addPlayer') }}" id="formAddPlayer">
                                                        {{ csrf_field() }}

                                                        {{ Form::hidden('equipe', $equipe->id) }}

                                                        <div class="form-group">
                                                            {{ Form::label('joueur', 'Joueur') }}
                                                            {{ Form::select('joueur', $playersWithoutTeam, null, ['id' => 'selectPlayer', 'class' => 'form-control', 'placeholder' => 'Sélectionner le joueur...']) }}
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="submit" class="btn" id="bouton_submit">
                                                                Ajouter le joueur
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <ul>
                            @foreach($equipe->users()->get() as $joueur)
                                <li>
                                @if($joueur->isCapitaine())
                                    {{ $joueur->prenom  }} {{ $joueur->nom }} (capitaine)
                                @else
                                    {{ $joueur->prenom  }} {{ $joueur->nom }}
                                    @if($user->isAdmin() || $user->isAdminLigue())
                                        <a href="{{ route('equipe.removePlayer', ['joueur' => $joueur->id, 'equipe' => $equipe->id]) }}" title="Retirer le joueur">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                    @endif
                                @endif
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
@endforeach