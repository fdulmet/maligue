<b>Prochain match :</b>
<p>
    @foreach($statsCalendrier as $statCalendrier)
        @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
        @if($carbonParis<$statCalendrier['date'])
            <tr id="trChaqueMatch">
                <td>{{ $statCalendrier['date'] }}</td>
                <td>{{ $statCalendrier['heure'] }}</td>
                <td>{{ $statCalendrier['equipe_1'] }}</td>
                <td>{{ $statCalendrier['buts_1'] }}</td>
                <td>-</td>
                <td>{{ $statCalendrier['buts_2'] }}</td>
                <td>{{ $statCalendrier['equipe_2'] }}</td>
            </tr>
        @else
            {{ '' }}
        @endif
        @endif
    @endforeach
</p>
<br>

<!--
    <div>Y participer : oui-non </div> : pas lean ?
    <div>Composition :</div> : pas lean
    Relances... ?
-->