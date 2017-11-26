@component('components.modals.base')
@slot('id')
retirerJoueur
@endslot
@slot('title')
    Retirer un joueur de l'équipe {{ $team->name  }}
@endslot
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        Êtes-vous sûr de vouloir retirer ce joueur de l'équipe ?
    </div>
</div>
@slot('footer')
<a href="#" id="retirerJoueurUrl" class="btn btn-green">Oui</a>
<button type="button" class="btn btn-orange btn-block" data-dismiss="modal">Non</button>
@endslot
@endcomponent
