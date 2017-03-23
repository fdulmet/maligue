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
    <?php
    $games = \App\Game::all();
    foreach ($games as $game){
    ?>
    <tr>
        <td id="tdChaqueMatch">
            <?php
            //date, heure
            $date = $game->date;
            $date = date('d/m/Y', strtotime($date));
            $heure = $game->heure;
            $heure = date('H\hi', strtotime($heure));

            //équipe1 buts1
            foreach ($game->equipes as $game){
                $pivot = $game->pivot;
                $buts = $pivot->buts;
                $equipe_id = $pivot->equipe_id;
                $equipe = \App\Equipe::find($equipe_id)->nom;
            }
            }
            ?>
        </td>
    </tr>
</table>
