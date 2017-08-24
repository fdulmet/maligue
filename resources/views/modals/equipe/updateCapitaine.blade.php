<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#updateCapitaine" id="bouton_updateCapitaine">
    Modifier le capitaine d'équipe
</button>

<div id="updateCapitaine" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Modifier le capitaine d'équipe
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.update') }}" id="formUpdateCapitaine">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{ Form::hidden('equipe', $currentEquipe->id) }}

                            <div class="form-group">
                                {{ Form::label('joueur', 'Joueur') }}
                                {{ Form::select('joueur', $currentSelectableJoueursEquipe, null, ['id' => 'selectCapitaine', 'class' => 'form-control', 'placeholder' => 'Sélectionner le joueur...']) }}
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn" id="bouton_submit">
                                    Modifier le capitaine
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
