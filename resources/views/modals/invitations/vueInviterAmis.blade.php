<div id="inviterAmis" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <!--Titre-->
                <h4 class="modal-title">
                    Inviter des amis
                </h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('inviterAmisDansEquipe') }}">
                    {{ csrf_field() }}
                    <label>
                        à rejoindre {{ $nomAuthEquipe }} :
                    </label>

                    <!--Champs mail de l'invité-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emails_join_team"
                                   placeholder="hatembenarfa@gmail.com, antoinegriezmann@gmail.com, etc" required autofocus>
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

                <form class="form-horizontal" role="form" method="POST" action="{{ route('inviterAmiACreerEquipe') }}">
                    {{ csrf_field() }}
                    <label>
                        à créer une nouvelle équipe dans {{ $nomAuthLigue }} :
                    </label>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emails_create_team"
                                   placeholder="florianthauvin@gmail.com, djibrilcisse@gmail.com, etc" required autofocus>
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

            </div>
        </div>
    </div>
</div>
