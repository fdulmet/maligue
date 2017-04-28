<table class="row">
    <tr id="trTitreCalendrier">
        <div id="titreCalendrier">
            Calendrier
        </div>
    </tr>
    <tr id="trLieu">
        Tous les matchs sont à {{ $lieu }}
    </tr>
    @foreach($statsCalendrier as $statCalendrier)
        <tr id="trChaqueMatch">
            <td>{{ $statCalendrier['date'] }}</td>
            <td>{{ $statCalendrier['heure'] }}</td>
            <td>{{ $statCalendrier['equipe_1'] }}</td>
            <td>{{ $statCalendrier['buts_1'] }}</td>
            <td>-</td>
            <td>{{ $statCalendrier['buts_2'] }}</td>
            <td>{{ $statCalendrier['equipe_2'] }}</td>
        </tr>
    @endforeach
</table>
