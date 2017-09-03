<div id="updateTeamName" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier le nom de l'équipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.updateName') }}" id="formUpdateTeamName">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{ Form::hidden('equipe', $currentEquipe->id) }}

                            <div class="form-group">
                                {{ Form::label('nom', 'Nom de l\'équipe') }}
                                {{ Form::text('nom', $currentEquipe->nom, ['class' => 'form-control', 'placeholder' => 'Nom de l\'équipe...']) }}
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>