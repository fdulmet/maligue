@component('components.modals.base')
@slot('id')
inviterAmisRejoindre
@endslot
@slot('title')
    Inviter des amis à rejoindre l'équipe {{ $team->name }}
@endslot
<form class="form-horizontal" role="form" method="POST" action="route('inviterAmisDansEquipe')">
    {{ csrf_field() }}

    <div class="form-group">
        <div class="col-md-12">
            <input id="emailInvite1" type="text" class="form-control" name="emails"
                   placeholder="hatembenarfa@gmail.com, antoinegriezmann@gmail.com, etc" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                Envoyer invitation
            </button>
        </div>
    </div>
</form>
@endcomponent
