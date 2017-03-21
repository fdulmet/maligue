<table class="row">
    <tr id="trTitreCalendrier">
        <div id="titreCalendrier">
            Calendrier
        </div>
    </tr>
    <tr id="trLieu">
        Tous les matchs sont au {{ $lieu }}
    </tr>
    @foreach($stats as $stat)
        <tr id="trChaqueMatch">
            <td>{{ $stat['date'] }}</td>

            <td>{{ $stat['heure'] }}</td>

            <td>{{ $stat['equipe_1'] }}</td>

            <td>{{ $stat['buts_1'] }}</td>

            <td>-</td>

            <td>{{ $stat['buts_2'] }}</td>

            <td>{{ $stat['equipe_2'] }}</td>
        </tr>
    @endforeach
</table>
