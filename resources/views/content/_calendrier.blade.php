
<table class="table table-sm table-condensed calendrier">
    <thead>
        <tr>
            <th colspan="6">
                <h2>Calendrier</h2>
            </th>
        </tr>
        <tr>
            <td colspan="6">
                <strong>Tous les matchs sont à {{ $lieu }}</strong>
            </td>
        </tr>
    </thead>

    <tbody id="style-4">
    @foreach($statsCalendrier as $statCalendrier)
        <tr id="trChaqueMatch">
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
            <td id="equipe1">{{ str_limit($statCalendrier['equipe_1'], 20, '...') }}</td>
            <td>
                {{ $statCalendrier['buts_1'] }}
            </td>
            <td>-</td>
            <td>
                {{ $statCalendrier['buts_2'] }}
            </td>
            <td id="equipe2">{{ str_limit($statCalendrier['equipe_2'], 20, '...') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>