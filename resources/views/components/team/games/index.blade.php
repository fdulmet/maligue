@php
$games = $team->games;
$now = \Carbon\Carbon::now();
$nextGames = $games->filter(function ($value, $key) use ($now) {
    return $now->lt($value->when);
});
$nextGames = $nextGames->sortBy('when')->values()->all();
$lastGames = $games->filter(function ($value, $key) use ($now) {
    return $now->gt($value->when);
});
$lastGames = $lastGames->sortBy('when')->values()->all();
@endphp
<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Derniers matchs :</strong>
        <br>
        <br>
        <div class="scrollbar scrollToBottom" id="style-4" style="max-height: 10rem; overflow: auto;">
            <div class="force-overflow"></div>
            @include('components.team.games.last', ['lastGames' => $lastGames, 'team' => $team])
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <br>
        <br>
        <strong class="color-green">Prochains matchs :</strong>
        <br>
        <br>
        <div class="scrollbar" id="style-4" style="max-height: 8rem; overflow: auto;">
            <div class="force-overflow"></div>
            @include('components.team.games.next', ['nextGames' => $nextGames])
        </div>
    </div>
</div>
