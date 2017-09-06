@foreach($statsCalendrier as $statCalendrier)
    @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
    @if($carbonStrtotime<$statCalendrier['dateStrtotime'])
        <table class="prochainMatch">
            <tr>
                <td>
                    @if(isset($statCalendrier['date_report']))
                        <span style="text-decoration: line-through;">{{ $statCalendrier['date'] }} {{ $statCalendrier['heure'] }}</span>
                        <br>
                        <span class="badge badge-warning">{{ \Carbon\Carbon::parse($statCalendrier['date_report'])->format('d/m/Y') }} {{ \Carbon\Carbon::parse($statCalendrier['heure_report'])->format('H\hi') }}</span>
                    @else
                        {{ $statCalendrier['date'] }} {{ $statCalendrier['heure'] }}
                    @endif

                <!--
                @if(isset($statCalendrier['lieu_report']) || isset($statCalendrier['date_report']))
                    <span class="badge badge-danger">Reporté</span>
                    <br>
@endif
                        -->

                    @if(isset($statCalendrier['lieu_report']))
                        <!--<br>
                        <span class="badge badge-warning">{{ $statCalendrier['lieu_report'] }}</span>-->
                    @endif
                </td>
                <td>{{ $statCalendrier['equipe_1'] }}</td>
                @if($statCalendrier['date']>$carbonStrtotime)
                    <td class="tdChampsButs">{{ $statCalendrier['buts_1'] }}</td>
                    <td>-</td>
                    <td class="tdChampsButs">{{ $statCalendrier['buts_2'] }}</td>
                @else
                    <td class="tdChampsButs"></td>
                    <td>-</td>
                    <td class="tdChampsButs"></td>
                @endif
                <td>{{ $statCalendrier['equipe_2'] }}</td>
            </tr>
        </table>
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