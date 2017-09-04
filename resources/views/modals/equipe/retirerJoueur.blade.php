<div id="retirerJoueur" class="modal modal-inside" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Retirer un joueur de l'équipe {{ $currentEquipe->nom  }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        Êtes-vous sûr de vouloir retirer ce joueur de l'équipe ?
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" id="retirerJoueurUrl" class="btn btn-green">Oui</a>
                <button type="button" class="btn btn-orange btn-block" data-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>