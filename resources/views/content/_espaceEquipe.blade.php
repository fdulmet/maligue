<div class="row">
    <div class="col-md-12">
        <div class="row">
            <!--Nom de l'équipe du mec identifié-->
            <span class="col-md-6" style="float: left">
                <h4 id="nom_equipe">
                    {{ $nomAuthEquipe }}
                </h4>
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
        @include('content._prochainMatch')

        <!--Test eloquent relationships :</b>
        $user = App\User::find(1);
        $user->equipes as $equipe) {}-->
    </div>
</div>








