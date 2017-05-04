<table class="row">
    <tr>
        <div id="motCalendrier">
            Calendrier
        </div>
    </tr>
    <tr>
        <div id="lieu">
            Tous les matchs sont à {{ $lieu }}
        </div>
    </tr>
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
</table>
