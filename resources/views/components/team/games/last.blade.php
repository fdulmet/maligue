@foreach($lastGames as $game)
  @if (count($game->teams) === 2)

  Form::open(['action' => 'MatchController@save'])
  Form::hidden('game_id', $statCalendrier['game_id'])

  <table class="dernierMatch">
      <tr>
          <td>
            {{$game->when}}
          </td>
          <td>{{ $game->teams[0]->name }}</td>
          @if($game->canceled)
            <td colspan="3">
                Annulé ou reporté
            </td>
          @else
            <td class="tdChampsButs">
                @if (isset($game->teams[0]->pivot->goals))
                  @if($game->teams[0]->pivot->goals > $game->teams[1]->pivot->goals)
                    <span class="badge badge-lg badge-success">{{ $game->teams[0]->pivot->goals }}</span>
                  @elseif($game->teams[0]->pivot->goals < $game->teams[1]->pivot->goals)
                    <span class="badge badge-lg badge-danger">{{ $game->teams[0]->pivot->goals }}</span>
                  @else
                    <span class="badge badge-lg badge-default">{{ $game->teams[0]->pivot->goals }}</span>
                  @endif
                @else
                    @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id)
                      <input type="text" name="buts_1">
                    @endif
                @endif
            </td>
            <td>-</td>
            <td class="tdChampsButs">
              @if (isset($game->teams[1]->pivot->goals))
                @if($game->teams[1]->pivot->goals > $game->teams[0]->pivot->goals)
                  <span class="badge badge-lg badge-success">{{ $game->teams[1]->pivot->goals }}</span>
                @elseif($game->teams[1]->pivot->goals < $game->teams[0]->pivot->goals)
                  <span class="badge badge-lg badge-danger">{{ $game->teams[1]->pivot->goals }}</span>
                @else
                  <span class="badge badge-lg badge-default">{{ $game->teams[1]->pivot->goals }}</span>
                @endif
              @else
                  @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id)
                    <input type="text" name="buts_2">
                  @endif
              @endif
            </td>
          @endif

          <td>{{ $game->teams[1]->name }}</td>

          @if(!(isset($game->teams[1]->pivot->goals) && isset($game->teams[0]->pivot->goals)) && (Auth::user()->isAdmin || Auth::user()->id === $team->captain->id))
            <td>Form::submit('OK', ['class' => 'btn btn-orange'])</td>
          @else
            <td>&nbsp;</td>
          @endif
      </tr>
  </table>
  @endif
@endforeach
