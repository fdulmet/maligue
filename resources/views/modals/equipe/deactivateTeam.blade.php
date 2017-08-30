<div id="deactivateEquipe{{ $currentEquipe->id }}" class="modal modal-inside" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Êtes-vous sûr de vouloir désactiver l'équipe {{ $currentEquipe->nom }} ?</h4>
            </div>
            <div class="modal-footer">
                {!! link_to_route('equipe.deactivate', 'Oui', ['id' => $currentEquipe->id], ['class' => 'btn btn-default']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>

<div id="addPlayer{{ $currentEquipe->id }}" class="modal modal-inside" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Ajouter un joueur à l'équipe {{ $currentEquipe->nom }}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.addPlayer') }}" id="formAddPlayer">
                            {{ csrf_field() }}

                            {{ Form::hidden('equipe', $currentEquipe->id) }}

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