@foreach($nextGames as $game)
  <table class="prochainMatch">
    @if(count($game->teams) === 2)
      <tr>
          <td>
            @if($game->canceled)
                Annulé ou reporté
            @else
                {{$game->when}}
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
