<table class="table table-sm classement">
    <thead>
        <tr>
            <th colspan="10">
                <h2>Classement</h2>
            </th>
        </tr>
        <tr>
            <td>Rang</td>
            <td>Equipe</td>
            <td class="text-center">Points</td>
            <td class="text-center">&nbsp;J&nbsp;</td>
            <td class="text-center">&nbsp;G&nbsp;</td>
            <td class="text-center">&nbsp;N&nbsp;</td>
            <td class="text-center">&nbsp;P&nbsp;</td>
            <td class="text-center">bp</td>
            <td class="text-center">bc</td>
            <td class="text-center">diff.</td>
        </tr>
    </thead>

    <tbody>
    @foreach($summary as $idx => $team)
      <tr id="trChaqueEquipe">
          <td>{{$loop->iteration}}</td>
          <td class="text-left">{{ str_limit($team['data']->name, 20, '...') }}</td>
          <td>{{ $team['points'] }}</td>
          <td>{{ $team['matchs']['total'] }}</td>
          <td>{{ $team['matchs']['positive'] }}</td>
          <td>{{ $team['matchs']['neutral'] }}</td>
          <td>{{ $team['matchs']['negative'] }}</td>
          <td>{{ $team['goals']['positive'] }}</td>
          <td>{{ $team['goals']['negative'] }}</td>
          <td>
            @if($team['goals']['diff'] > 0)
                +{{ $team['goals']['diff'] }}
            @else
                {{ $team['goals']['diff'] }}
            @endif
          </td>
      </tr>
    @endforeach
    </tbody>
</table>
