
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
    <tbody id="style-4">
    @foreach($season->games as $game)
      @if(count($game->teams) === 2)
        <tr id="trChaqueMatch">
            <td>
                {{ $game->when }}
            </td>
            <td>
                {{ $game->place}}
                @if ($game->field)
                  ({{ $game->field }})
                @endif
            </td>
            <td id="equipe1">{{ str_limit($game->teams[0]->name, 20, '...') }}</td>
            <td>
                {{ $game->teams[0]->pivot->goals }}
            </td>
            <td>-</td>
            <td>
                {{ $game->teams[1]->pivot->goals }}
            </td>
            <td id="equipe2">{{ str_limit($game->teams[0]->name, 20, '...') }}</td>
        </tr>
      @endif
    @endforeach
    </tbody>
</table>
