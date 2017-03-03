<!-- Modal -->
<div id="profilJoueur" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <h4 class="modal-title">Profil Joueur</h4>
            </div>
            <div class="modal-body">
                <p>
                <div>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</div>
                <div>Ligue : la ligue des pingouins</div>
                    <div>Equipe : La New Team, capitaine</div>
                    <br>
                    email, mdp

                </p>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="bouton_fermer_profil_joueur">Fermer</button>
            </div>-->
        </div>
    </div>
</div>