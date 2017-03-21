<table class="row">
    <tr>
        <td id="tdTitreCalendrier">
            <div id="titreCalendrier">
                Calendrier
            </div>
        </td>
    </tr>
    <tr>
        <td id="tdLieu">
            Tous les matchs sont au {{ $lieu }}
        </td>
    </tr>
    @foreach($stats as $stat)
        <tr>
            <td id="tdChaqueMatch">
                {{ $stat['date'] }}&nbsp;&nbsp;&nbsp;{{ $stat['heure'] }}
            </td>

                <!--équipe1 buts1-->
            <td>
                {{ $stat['equipe_1'] }}&nbsp;
            </td>

            <td>
                {{ $stat['buts_1'] }}&nbsp;
            </td>

            <td>
                {{ $stat['buts_2'] }}&nbsp;
            </td>

            <td>
                {{ $stat['equipe_2'] }}&nbsp;
            </td>
        </tr>
    @endforeach
</table>
