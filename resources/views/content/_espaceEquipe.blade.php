<div class="row">
    <div class="col-md-12">
        <div class="row">
            <!--Nom de l'équipe du mec identifié-->
            <span class="col-md-6">
                <h4 id="nom_equipe">
                    {{ $nomAuthEquipe }}
                </h4>
                <!--logo équipe (passer par un helper)-->
                <div id="logoEquipe">
                    @include('content._logoEquipe')
                </div>
            </span>

            <!--Bouton inviter des amis-->
            <div class="col-md-6">

                <div class="row">
                    @include('modals.invitations.boutonInviterAmis')
                    @include('modals.invitations.vueInviterAmis')
                </div>

                <div class="row">
                    @include('modals.equipe.updateCapitaine')
                </div>
            </div>

        </div>
    </div>
    <!--Message de confirmation qui apparaît après avoir invité un ami à rejoindre équipe-->
    <p class="col-md-12" id="confirmation_invitation_amis_dans_equipe_envoyee">
        <!--$confirmation est définie dans InviterAmisDansEquipeController, dans :-->
        <!--return response()->view('home', ['confirmation' => $invitationEnvoyee]);-->
        {{-- <br> --}}
    </p>
    <div class="col-md-12">
        @include('content._effectif')
        <br>
        @include('content._dernierMatch')
        <br>
        @include('content._prochainMatch')
    </div>
</div>
