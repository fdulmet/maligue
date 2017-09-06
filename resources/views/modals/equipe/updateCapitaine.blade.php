<div id="updateCapitaine" class="modal fade" role="dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.updateCapitaine') }}" id="formUpdateCapitaine">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le capitaine d'équipe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{ Form::hidden('equipe', $currentEquipe->id) }}

                            <div class="form-group">
                                {{ Form::label('joueur', 'Joueur') }}
                                {{ Form::select('joueur', $currentSelectableJoueursEquipe, null, ['id' => 'selectCapitaine', 'class' => 'form-control', 'placeholder' => 'Sélectionner le joueur...']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-orange btn-block">Modifier le capitaine</button>
                </div>
            </form>
        </div>
    </div>
</div>
