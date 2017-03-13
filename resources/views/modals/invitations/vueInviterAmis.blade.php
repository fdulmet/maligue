<!-- Modal -->
<div id="inviterAmis" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <!--Titre-->
            <div class="modal-header">
                <h4 class="modal-title">
                    Inviter des amis
                </h4>
            </div>
            <!--Contenu-->
            <div class="modal-body">

                <!--A rejoindre son équipe-->
                <form class="form-horizontal form-inline" role="form" method="GET" action="{{ route('inviterAmisDansEquipe') }}">
                    {{ csrf_field() }}
                    <label>
                        à rejoindre
                        <?php
                        //Nom de l'équipe du mec identifié
                        $authEquipe = Auth::user()->equipes()->get();
                        foreach ($authEquipe as $authEquipe) {
                            $nomAuthEquipe = $authEquipe->nom;
                            echo ' '.$nomAuthEquipe.' : ';
                        }
                        ?>
                    </label>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emailInvite1"
                                   placeholder="hatembenarfa@gmail.com" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn" id="bouton_submit">
                                Envoyer invitation
                            </button>
                        </div>
                    </div>
                </form>
                <br>
                <br>

                <!--A créer une équipe-->
                <form class="form-horizontal form-inline" role="form" method="GET" action="{{ route('inviterAmiACreerEquipe') }}">
                    {{ csrf_field() }}
                    <label>
                        à créer une nouvelle équipe :
                    </label>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emailInvite1"
                                   placeholder="florianthauvin@gmail.com" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn" id="bouton_submit">
                                Envoyer invitation
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
