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
            <?php
            //lieu
            $game = \App\Game::find(1);
            $lieu = $game->lieu;
            echo 'Tous les matchs sont au '.$lieu;
            ?>
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
                echo $date.'&nbsp;&nbsp;&nbsp;'.$heure.'&nbsp;&nbsp;&nbsp;';

                //équipe1 buts1
                foreach ($game->equipes as $game){
                    $pivot = $game->pivot;
                    $buts = $pivot->buts;
                    $equipe_id = $pivot->equipe_id;
                    $equipe = \App\Equipe::find($equipe_id)->nom;
                    echo $equipe.'&nbsp;&nbsp;&nbsp;'.$buts.'&nbsp;&nbsp;&nbsp;';
                }
            }
            ?>
        </td>
    </tr>
</table>

