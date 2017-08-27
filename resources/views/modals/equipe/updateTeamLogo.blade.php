<div id="updateTeamLogo" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Modifier le logo de l'équipe
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </h4>
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.updateLogo') }}" id="formUpdateTeamLogo" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{ Form::hidden('equipe', $currentEquipe->id) }}

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-primary btn-file">
                                <span class="fileupload-new">Choisir image</span>
                                <span class="fileupload-exists">Choisir une autre image</span>
                                    <input name="logo" type="file">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="bouton_submit">
                        Modifier
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>