
<table class="table table-sm table-condensed calendrier">
    <thead>
        <tr>
            <th colspan="6">
                <h2>Calendrier</h2>
            </th>
        </tr>
        <tr>
            <td colspan="6">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody class="style-4"  id='leaguecalendar'>
    @php
    $seasonGames = $season->games;
    $now = \Carbon\Carbon::now();
    $seasonNextGames = $seasonGames->filter(function ($value, $key) use ($now) {
        return $now->lt($value->when);
    });
    $seasonLastGames = $seasonGames->filter(function ($value, $key) use ($now) {
        return $now->gt($value->when);
    });
    @endphp
    @foreach($seasonLastGames as $game)
      @if(count($game->teams) === 2)
        <tr class="trChaqueMatch">
            <td>
                {{ $game->whenWithFormatting }}
            </td>
            <td>
                {{ $game->place}}
                @if ($game->field)
                  ({{ $game->field }})
                @endif
            </td>
            <td class="equipe1">{{ str_limit($game->teams[0]->name, 20, '...') }}</td>
            <td>
                {{ $game->teams[0]->pivot->goals }}
            </td>
            <td>-</td>
            <td>
                {{ $game->teams[1]->pivot->goals }}
            </td>
            <td class="equipe2">{{ str_limit($game->teams[1]->name, 20, '...') }}</td>
        </tr>
      @endif
    @endforeach
    @foreach($seasonNextGames as $game)
      @if(count($game->teams) === 2)
        @if ($loop->first)
        <tr class="trChaqueMatch" id='calendrierLeagueBreakpoint'>
        @else
        <tr class="trChaqueMatch">
        @endif
            <td>
                {{ $game->whenWithFormatting }}
            </td>
            <td>
                {{ $game->place}}
                @if ($game->field)
                  ({{ $game->field }})
                @endif
            </td>
            <td class="equipe1">{{ str_limit($game->teams[0]->name, 20, '...') }}</td>
            <td>
                {{ $game->teams[0]->pivot->goals }}
            </td>
            <td>-</td>
            <td>
                {{ $game->teams[1]->pivot->goals }}
            </td>
            <td class="equipe2">{{ str_limit($game->teams[1]->name, 20, '...') }}</td>
        </tr>
      @endif
    @endforeach
    </tbody>
</table>
@push('scripts')
<script>
$(function () {
  $(document).ready(function (){
    var startPosition = $('#calendrierLeagueBreakpoint').offset().top;
    $("#leaguecalendar").scrollTop(startPosition);
  })
});
</script>
@endpush
