<div class="scrollbar" id="style-4" style="max-height: 30rem; overflow: auto;">
    <div class="force-overflow"></div>
    <table class="table table-sm calendrier">
        <thead>
            <tr>
                <th colspan="7">
                    <h2>Calendrier</h2>
                </th>
            </tr>
            <tr>
                <td colspan="7">
                    <strong>Tous les matchs sont à {{ $lieu }}</strong>
                </td>
            </tr>
        </thead>

        <tbody>
        @foreach($statsCalendrier as $statCalendrier)
            <tr id="trChaqueMatch">
                <td>{{ $statCalendrier['date'] }}</td>
                <td>{{ $statCalendrier['heure'] }}</td>
                <td id="equipe1">{{ $statCalendrier['equipe_1'] }}</td>
                <td>{{ $statCalendrier['buts_1'] }}</td>
                <td>-</td>
                <td>{{ $statCalendrier['buts_2'] }}</td>
                <td id="equipe2">{{ $statCalendrier['equipe_2'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>