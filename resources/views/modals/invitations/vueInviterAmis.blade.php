<div id="inviterAmisRejoindre" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Inviter des amis à rejoindre l'équipe {{ $nomAuthEquipe }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('inviterAmisDansEquipe') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emails"
                                   placeholder="hatembenarfa@gmail.com, antoinegriezmann@gmail.com, etc" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                                Envoyer invitation
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
