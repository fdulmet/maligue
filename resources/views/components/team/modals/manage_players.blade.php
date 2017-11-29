@component('components.modals.base')
@slot('id')
managePlayers
@endslot
@slot('title')
    Gestion des joueurs de l'équipe {{ $team->name  }}
@endslot
<div class="row">
    <div class="col">
        <br>
        <strong class="color-green">Effectif :</strong>
        <div class="list-group list-players">
            @foreach($team->users->take(5) as $player)
                <span class="list-group-item">
                    @if($player->id === $team->captain->id)
                        {{ $player->first_name }} {{ $player->last_name }} (capitaine)
                    @else
                        {{ $player->first_name }} {{ $player->last_name }}
                    @endif
                    @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id || $player->id === Auth::user()->id)
                        <a href="#" data-dismiss="modal" data-url="{{ route('team.detachPlayer', ['teamSlug' => $team->slug, 'playerId' => $player->id ])}}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                            <i class="fa fa-remove"></i>
                        </a>
                    @endif
                </span>
            @endforeach
        </div>
    </div>
    @if($team->users->count() > 5)
        <div class="col">
            <br>
            <br>
            <div class="list-group list-players">
                @foreach($team->users->splice(5)->take(5) as $player)
                    <span class="list-group-item">
                      @if($player->id === $team->captain->id)
                          {{ $player->first_name }} {{ $player->last_name }} (capitaine)
                      @else
                          {{ $player->first_name }} {{ $player->last_name }}
                      @endif
                      @if(Auth::user()->isAdmin || $player->id === Auth::user()->id)
                          <a href="#" data-dismiss="modal" data-url="{{ route('team.detachPlayer', ['teamSlug' => $team->slug, 'playerId' => $player->id ]) }}" title="Retirer le joueur" data-toggle="modal" data-target="#retirerJoueur">
                              <i class="fa fa-remove"></i>
                          </a>
                      @endif
                </span>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endcomponent
