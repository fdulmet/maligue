<table class="row">
    <tr>
        <b>Classement</b>
    </tr>
    <tr>
        <td>Rang</td>
        <td>Equipe</td>
        <td>Points</td>
        <td>J</td>
        <td>G</td>
        <td>N</td>
        <td>P</td>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <?php
                //bp
                $butsPour = 0;
                foreach ($equipe->games as $game){
                    $butsPourDeChaqueMatch = $game->pivot->buts;
                    $butsPour+= $butsPourDeChaqueMatch;
                }
                echo $butsPour;
            ?>
        </td>
        <td>
            <?php
                //bc
                //$butsContre = 0;
                foreach ($equipe->games as $game){
                    $equipe_id = $game->pivot->equipe_id;
                    echo $equipe_game = DB::table('equipe_game')->where('equipe_id', $equipe_id)->get();


                }
        }
            ?>
        </td>
        <td></td>
        <td></td>

    </tr>
</table>