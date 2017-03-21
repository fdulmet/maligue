<table class="row">
    <tr>
        <b>Classement</b>
    </tr>
    <tr id="ligneTitres">
        <td>Rang</td>
        <td>Equipe</td>
        <td>Points</td>
        <td>&nbsp;J&nbsp;</td>
        <td>&nbsp;G&nbsp;</td>
        <td>&nbsp;N&nbsp;</td>
        <td>&nbsp;P&nbsp;</td>
        <td>bp</td>
        <td>bc</td>
        <td>diff.</td>
    </tr>
    <?php
        $rang = 1;
        $equipes = \App\Equipe::all();
        foreach ($equipes as $equipe){
    ?>
    <tr>
        <td>
            <?php
                //Rang
                echo $rang;
                $rang=$rang+1;
            ?>
        </td>
        <td id="tdChaqueEquipe">
            <?php
                //Equipe
                echo $nomEquipe = $equipe->nom;
            ?>
        </td>
        <td>
            <?php
                //Points
                //il faut que les buts de chaque match soient déjà calculés
            ?>
        </td>
        <td>
            <?php
                //Joué
                echo $equipe->games->count();
            ?>
        </td>
        <td>
            <?php
            //Gagnés
            foreach ($equipe->games as $game){
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;
                $gagnes = 0;
                if ($diffParMatch>0){
                    $gagneChaqueMatch = 1;
                } else{
                    $gagneChaqueMatch = 0;
                }
                echo $gagnes += $gagneChaqueMatch;
            }

            ?>
        </td>
        <td>
            <?php
            //Nuls
            foreach ($equipe->games as $game){
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;
                $nuls = 0;
                if ($diffParMatch=0){
                    $nulChaqueMatch = 1;
                } else{
                    $nulChaqueMatch = 0;
                }
                echo $nuls += $nulChaqueMatch;
            }

            ?>
        </td>
        <td>
            <?php
            //Perdus
            foreach ($equipe->games as $game){
                $butsPourDeChaqueMatch = $game->pivot->buts;
                $game_id = $game->pivot->game_id;
                $equipe_id = $game->pivot->equipe_id;
                $autre_equipe_game = DB::table('equipe_game')->where([
                    ['game_id','=', $game_id],
                    ['equipe_id','!=', $equipe_id],
                ])->get();
                foreach ($autre_equipe_game as $autre_equipe_game){
                    $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                }
                $diffParMatch = $butsPourDeChaqueMatch - $butsContreDeChaqueMatch;
                $perdus = 0;
                if ($diffParMatch<0){
                    $perduChaqueMatch = 1;
                } else{
                    $perduChaqueMatch = 0;
                }
                echo $perdus += $perduChaqueMatch;
            }

            ?>
        </td>
        <td>
            <?php
                //buts pour
                $butsPour = 0;
                foreach ($equipe->games as $game){
                    $butsPourDeChaqueMatch = $game->pivot->buts;
                    $butsPour += $butsPourDeChaqueMatch;
                }
                echo $butsPour;
            ?>
        </td>
        <td>
            <?php
                //buts contre
                foreach ($equipe->games as $game){
                    $game_id = $game->pivot->game_id;
                    $equipe_id = $game->pivot->equipe_id;
                    $autre_equipe_game = DB::table('equipe_game')->where([
                        ['game_id','=', $game_id],
                        ['equipe_id','!=', $equipe_id],
                    ])->get();

                    $butsContre = 0;
                    foreach ($autre_equipe_game as $autre_equipe_game){
                        $butsContreDeChaqueMatch = $autre_equipe_game->buts;
                        $butsContre += $butsContreDeChaqueMatch;
                    }
                    echo $butsContre;
                }
            ?>
        </td>
        <td>
            <?php
                //diff.
                echo $diff = $butsPour - $butsContre;
        }
            ?>
        </td>


    </tr>
</table>