@component('components.modals.base')
@slot('id')
updateTeamName
@endslot
@slot('title')
    Modifier le nom de l'équipe
@endslot
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('team.update', ['teamSlug' => $team->slug]) }}" id="formUpdateTeamName">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nom de l'équipe</label>
                <input class="form-control" placeholder="Nom de l'équipe..." name="name" type="text" value="{{$team->name}}" id="name">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                    Modifier
                </button>
            </div>
        </form>
    </div>
</div>
@endcomponent
