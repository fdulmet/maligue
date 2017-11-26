@component('components.modals.base')
@slot('title')
        Effectifs équipes
@endslot
@slot('id')
effectifsEquipes
@endslot
@foreach($league->teams as $team)
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="logoEquipe pull-left">
                        @if($team->logo != '')
                            <img src="{{ url($team->logo) }}">
                        @else
                            <img src="{{ asset('images/logo-default.svg') }}">
                        @endif
                    </div>
                    <div class="media-body">
                        <h5><strong>{{ $team->name }}</strong></h5>
                        <ul>
                        @foreach($team->users as $player)
                            <li>
                            @if($player->id === $team->captain->id)
                                {{ $player->first_name  }} {{ $player->last_name }} (capitaine)
                            @else
                                {{ $player->first_name  }} {{ $player->last_name }}
                            @endif
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <br>
@endforeach
@endcomponent
