<b>Prochain match :</b>

@foreach($statsCalendrier as $statCalendrier)
    @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
    @if($carbonParis<$statCalendrier['date'])
        <table>
            <tr id="prochainMatch">
                <td>{{ $statCalendrier['date'] }}</td>
                <td>{{ $statCalendrier['heure'] }}</td>
                <td>{{ $statCalendrier['equipe_1'] }}</td>
                <td></td>
                <td>-</td>
                <td></td>
                <td>{{ $statCalendrier['equipe_2'] }}</td>
            </tr>
        </table>

        <?php break; ?>
    @else
        {{ '' }}
    @endif
    @endif
@endforeach

<!--
    <div>Y participer : oui-non </div> : pas lean ?
    <div>Composition :</div> : pas lean
    Relances... ?
-->