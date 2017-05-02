<div class="row">
    <div class="col-md-12">
        <div class="row">
            <!--Nom de l'équipe du mec identifié-->
            <span class="col-md-6" style="float: left">
                <h4 id="nom_equipe">
                    {{ $nomAuthEquipe }}
                </h4>
                <!--logo équipe (passer par un helper)-->
                <?php
                    use Illuminate\Support\Facades\Auth;
                    use App\User;
                    $authEquipe = Auth::user()->equipes()->get();
                    foreach ($authEquipe as $authEquipe) {
                        $logoAuthEquipe = $authEquipe->logo;
                        echo '<img src="'.$logoAuthEquipe.'" alt="logo les zobs" style="width:240px;height:149px;">';
                        //var_dump ($logoAuthEquipe);
                    }
                    //echo '<img src="../../../public/logo_equipe_lesZobs.png" alt="logo les zobs" style="width:auto;height:auto;">';
                ?>

            </span>
            <!--Bouton inviter des amis-->
            <div class="col-md-6">
                @include('modals.invitations.boutonInviterAmis')
                @include('modals.invitations.vueInviterAmis')
            </div>

        </div>
    </div>
    <!--Message de confirmation qui apparaît après avoir invité un ami à rejoindre équipe-->
    <p class="col-md-12" id="confirmation_invitation_amis_dans_equipe_envoyee">
        <!--$confirmation est définie dans InviterAmisDansEquipeController, dans :-->
        <!--return response()->view('home', ['confirmation' => $invitationEnvoyee]);-->
        <br>
        @if (isset ($confirmation))
            {{ $confirmation }}
        @else
            {{ '' }}
        @endif
    </p>
    <div class="col-md-12">
        @include('content._effectif')
        <br>
        @include('content._dernierMatch')
        <br>
        @include('content._prochainMatch')
    </div>
</div>








