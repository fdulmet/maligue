@foreach($lastGames as $game)
  @if (count($game->teams) === 2 && !$game->canceled)

<form class="form-horizontal" role="form" method="POST" action="{{ route('league.season.game.setScore', ['leagueSlug' => $league->slug, 'seasonSlug' => $season->slug, 'gameId' => $game->id]) }}">
  <input name="_method" type="hidden" value="PUT">
  {{ csrf_field() }}
  <table class="dernierMatch">
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
                    <input type="text" name="goal[{{$game->teams[0]->id}}]">
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
                  <input type="text" name="goal[{{$game->teams[1]->id}}]">
                @endif
            @endif
          </td>

          <td>{{ $game->teams[1]->name }}</td>

          @if(!$game->canceled &&
            !(isset($game->teams[1]->pivot->goals) && isset($game->teams[0]->pivot->goals))
            && (Auth::user()->isAdmin || Auth::user()->id === $team->captain->id))
            <td><button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                Ok
            </button></td>
          @else
            <td>&nbsp;</td>
          @endif
      </tr>
  </table>
</form>
  @endif
@endforeach
