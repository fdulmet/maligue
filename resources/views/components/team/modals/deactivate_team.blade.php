@component('components.modals.base')
@slot('id')
deactivateEquipe
@endslot
@slot('title')
    Désactiver l'équipe
@endslot
<div class="col-md-8 col-md-offset-2">
    Êtes-vous sûr de vouloir désactiver l'équipe {{ $team->name }} ?
</div>
@slot('footer')
<a type="button" class="btn btn-green" href="{{ route('team.delete', ['teamSlug' => $team->slug] )}}">Oui</a>
<button type="button" class="btn btn-orange btn-block" data-dismiss="modal">Non</button>
@endslot
@endcomponent
