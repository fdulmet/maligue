@component('components.modals.base')
@slot('id')
addPlayer
@endslot
@slot('title')
    Ajouter un joueur à l'équipe {{ $team->name  }}
@endslot
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('team.attachPlayer', ['teamSlug' => $team->slug ]) }}" id="formAddPlayer">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="joueur">Joueur</label>
              <select id="selectPlayer" class="form-control" name="playerId">
                <option selected="selected" value="">Sélectionner le joueur...</option>
                @foreach($users as $user)
                  <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                    Ajouter le joueur
                </button>
            </div>
        </form>
    </div>
</div>
@endcomponent
