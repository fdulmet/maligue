@foreach($nextGames as $game)
  <table class="prochainMatch">
    @if(count($game->teams) === 2 && !$game->canceled)
      <tr>
          <td>
            @if ($game->initialGame)
            <span style="text-decoration: line-through;">{{$game->initialGame->whenWithFormatting}}</span>
            <br/>
            <span class="badge badge-warning">{{$game->whenWithFormatting}}</span>
            @else
            <span>{{ $game->whenWithFormatting }}</span>
            @endif
          </td>
          <td>{{ $game->teams[0]->name }}</td>
          <td class="tdChampsButs"></td>
          <td>-</td>
          <td class="tdChampsButs"></td>
          <td>{{ $game->teams[1]->name }}</td>
      </tr>
    @endif
  </table>
@endforeach
