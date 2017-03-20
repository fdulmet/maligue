<table class="row">
    <tr>
        <td id="tdTitreCalendrier">
            <div id="titreCalendrier">
                Calendrier
            </div>
        </td>
    </tr>
    @foreach($games as $game)
        <tr>
            <td id="tdLieu">
                Tous les matchs sont au {{ $lieu }}
            </td>
        </tr>
        <tr>
            <td id="tdChaqueMatch">
                {{ $date }}&nbsp;&nbsp;&nbsp;{{ $heure }}.'&nbsp;&nbsp;&nbsp;

                <!--équipe1 buts1-->
                {{ $equipe }}&nbsp;&nbsp;&nbsp;{{ $buts }}&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
    @endforeach
</table>
