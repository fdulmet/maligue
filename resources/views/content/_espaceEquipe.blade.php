<div class="row">
    <h4 class="col-md-12">
        <?php
            use Illuminate\Support\Facades\Auth;
            $equipes = Auth::user()->equipes()->get();
            foreach ($equipes as $equipe) {
                echo $equipe->nom;
            }
        ?>

    </h4>
</div>
<div class="row">
    <div class="col-md-12">
        <p>
            <b>Effectif :</b>
            <br>
            <span>
                <!--$users = App\User::where('nom', Auth::user()->nom)->get();-->
                <!--$authEquipe = $team->nom;-->
                <?php
                    use Illuminate\Support\Facades\Auth as Authentification;
                    //On prend les equipe de tous les users
                    $usersEquipes = new App\User;
                    $usersEquipes->equipes()->get();
                    $userEquipes=$userEquipes->nom;
                    foreach ($usersEquipes as $userEquipe){
                        $userEquipe;
                        //$userTeam=$userEquipe->nom;
                    }
                    //On prend l'équipe du mec authentifié
                    $authEquipe = Authentification::user()->equipes()->get();
                    $authTeams = $authEquipe->nom;
                    foreach ($authTeams as $authTeam) {
                        $authTeam;
                        //On affiche les noms des mecs qui ont la même équipe
                        if ($userEquipe==$authTeam) {
                            echo $userEquipe;
                        } else {
                            echo'';
                        }
                    }
                ?>


            </span>
            <br>
            @include('layouts.modal', ['id' => 'inviterAmisDansEquipe', 'titre' => 'Inviter un ami à rejoindre l\'équipe', 'body' => 'modals.vueInviterAmisDansEquipe'])

            <!--Message de confirmation apparaît après avoir invité un ami à rejoindre équipe-->
            <div id="confirmation_invitation_amis_dans_equipe_envoyee">
                <?php
                if (isset ($confirmation)) {
                    echo $confirmation;
                }
                else {
                    echo '';
                }
                ?>
            </div>

        </p>
        <br>
            <b>Prochain match :</b>
            <div>La New Team vs Les Manchots</div>
            <div>Y participer : oui-non </div>
            <div>Composition :</div>

        <br>
        <!--Test eloquent relationships :</b>

        $user = App\User::find(1);
        $user->equipes as $equipe) {
        }
        -->

    </div>
</div>















