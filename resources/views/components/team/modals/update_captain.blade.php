@component('components.modals.base')
@slot('id')
updateCapitaine
@endslot
@slot('title')
    Modifier le capitaine d'équipe
@endslot

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('team.update', ['teamSlug' => $team->slug]) }}" id="formUpdateTeamName">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="captain">Joueur</label>
                <select class="form-control" name="captain" id="captain">
                  <option>Sélectionner un joueur</option>
                  @foreach($team->users as $user)
                    @if ($user->id === $team->captain->id)
                    <option value='{{$user->id}}' disabled>{{$user->first_name}} {{$user->last_name}}</option>
                    @else
                    <option value='{{$user->id}}'>{{$user->first_name}} {{$user->last_name}}</option>
                    @endif
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-orange btn-block">Modifier le capitaine</button>
            </div>
        </form>
    </div>
</div>
@endcomponent
