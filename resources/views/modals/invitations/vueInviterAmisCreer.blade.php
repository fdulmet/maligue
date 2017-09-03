<div id="inviterAmisCreer" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Inviter des amis à créer une équipe dans {{ $nomAuthLigue }}
                </h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('inviterAmiACreerEquipe') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="emailInvite1" type="text" class="form-control" name="emails"
                                   placeholder="florianthauvin@gmail.com, djibrilcisse@gmail.com, etc" required>
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