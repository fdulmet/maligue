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
            @php
              $goalClass = '';
              if (isset($game->teams[0]->pivot->goals) && isset($game->teams[1]->pivot->goals)) {
                if($game->teams[0]->id === $team->id) {
                  $myTeamGoal = $game->teams[0]->pivot->goals;
                  $otherTeamGoal = $game->teams[1]->pivot->goals;
                } else {
                  $myTeamGoal = $game->teams[1]->pivot->goals;
                  $otherTeamGoal = $game->teams[0]->pivot->goals;
                }
                if ($myTeamGoal > $otherTeamGoal) {
                  $goalClass = 'badge-success';
                } else if ($myTeamGoal < $otherTeamGoal) {
                  $goalClass = 'badge-danger';
                } else {
                  $goalClass = 'badge-default';
                }
              }
            @endphp
              @if (isset($game->teams[0]->pivot->goals))
                <span class="badge badge-lg {{$goalClass}}">{{ $game->teams[0]->pivot->goals }}</span>
              @else
                  @if(Auth::user()->isAdmin || Auth::user()->id === $team->captain->id)
                    <input type="text" name="goal[{{$game->teams[0]->id}}]">
                  @endif
              @endif
          </td>
          <td>-</td>
          <td class="tdChampsButs">
            @if (isset($game->teams[1]->pivot->goals))
              <span class="badge badge-lg {{$goalClass}}">{{ $game->teams[1]->pivot->goals }}</span>
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
