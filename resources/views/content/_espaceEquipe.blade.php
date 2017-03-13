<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Equipe;
?>
<div class="row">
    <h4 class="col-md-12">
        <?php
            //Nom de l'équipe du mec identifié
            $authEquipe = Auth::user()->equipes()->get();
            foreach ($authEquipe as $authEquipe) {
                $nomAuthEquipe = $authEquipe->nom;
                echo $nomAuthEquipe;
            }
            /*OU
            $auth = Auth::user();
            foreach ($auth->equipes as $authTableEquipe){
                $authEquipe = $authTableEquipe->nom;
                $authEquipe;
            }*/
        ?>
    </h4>
</div>
<div class="row">
    <div class="col-md-12">
        <p>
            <b>Effectif :</b>
            <br>
            <span>
                <?php
                    //On prend l'id de l'équipe du mec authentifié
                    $authEquipe = Auth::user()->equipes()->get();
                    foreach ($authEquipe as $authEquipe) {
                        $idAuthEquipe = $authEquipe->id;
                    }

                    //Dans table equipe_user on prend ceux qui ont même equipe_id que mec authentifié
                    $usersDeMemeEquipeQueAuth = DB::table('equipe_user')->where('equipe_id', $idAuthEquipe)->get();
                    //On prends leurs user_id
                    foreach ($usersDeMemeEquipeQueAuth as $userId)
                    {
                        $id = $userId->user_id;
                    //Et on va dans table users pour afficher prenoms/noms correspondants à ces id
                        $user = DB::table('users')->where('id', $id)->get();
                            foreach ($user as $user) {
                                $prenom = $user->prenom;
                                $nom = $user->nom;
                                echo $prenom.' '.$nom.'<br>';
                            }
                    }
                    //$user = App\User::find(1)->equipes()->get();
                    //$lala = App\User::where('id_equipe', $idAuthEquipe)->get();
                ?>
            </span>

            <!--Bouton "Inviter un ami à rejoindre l'équipe"-->
            @include('layouts.modal', ['id' => 'inviterAmisDansEquipe', 'titre' => 'Inviter un ami à rejoindre l\'équipe', 'body' => 'modals.vueInviterAmisDansEquipe'])

            <!--Message de confirmation qui apparaît après avoir invité un ami à rejoindre équipe-->
            <div id="confirmation_invitation_amis_dans_equipe_envoyee">
                <!--$confirmation est définie dans InviterAmisDansEquipeController, dans :-->
                <!--return response()->view('home', ['confirmation' => $invitationEnvoyee]);-->
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
        <p>
            <b>Prochain match :</b>
            <div>La New Team vs Les Manchots</div>
            <div>Y participer : oui-non </div>
            <div>Composition :</div>
        </p>
        <!--Test eloquent relationships :</b>
        $user = App\User::find(1);
        $user->equipes as $equipe) {}-->
    </div>
</div>






