<b>Dernier match :</b>

@foreach($statsCalendrier as $statCalendrier)
    @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
        @if($carbonParis>$statCalendrier['date'])

            {{ Form::open(['action' => 'EntrerScoreController@entrerscore']) }}
            {{ Form::hidden('game_id', $statCalendrier['game_id'])  }}
            <table>
                <tr id="prochainMatch">
                    <td>{{ $statCalendrier['date'] }}</td>
                    <td>{{ $statCalendrier['heure'] }}</td>
                    <td>{{ $statCalendrier['equipe_1'] }}</td>
                    <td>
                        @if (isset($statCalendrier['buts_1']))
                        {{ $statCalendrier['buts_1'] }}
                        @else
                        <!--Pour entrer nouveau score. Que capitaine. Différence avec doubles accolades ?-->
                        {{ Form::number('buts_'.  $statCalendrier['equipe_1_id']) }}
                        @endif
                    </td>
                    <td>-</td>
                    <td>
                        @if (isset($statCalendrier['buts_2']))
                        {{ $statCalendrier['buts_2'] }}
                        @else
                        <!--Pour entrer nouveau score-->
                        {{ Form::number('buts_'. $statCalendrier['equipe_2_id']) }}
                        @endif
                    </td>
                    <td>{{ $statCalendrier['equipe_2'] }}</td>
                    <td>{{ Form::submit() }}</td>
                </tr>
            </table>
            {{ Form::close('Envoyer') }}
        @else
            {{ '' }}
        @endif
    @endif
@endforeach
