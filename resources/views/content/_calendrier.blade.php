<div class="row">
    <h5 id="titreCalendrier">
        Calendrier
    </h5>
    <div>
        Tous les matchs se jouent dans tel centre
    </div>
    <div>
        <?php
            //lieu, date, heure
            $games = \App\Game::all();
            foreach ($games as $game){
                $lieu = $game->lieu;
                $date = $game->date;
                $heure = $game->heure;
                echo'<br>&nbsp;&nbsp;&nbsp;'.$date.'&nbsp;&nbsp;&nbsp;'.$heure.'&nbsp;&nbsp;&nbsp;';

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
    </div>
</div>

