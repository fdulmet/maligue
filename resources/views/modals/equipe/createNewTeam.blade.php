<div id="createNewTeam" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    Créer une nouvelle équipe
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.store') }}" id="formCreateNewTeam" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                {{ Form::label('nom', 'Nom de l\'équipe') }}
                                {{ Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom de l\'équipe...']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('logo', 'Logo de l\'équipe') }}
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

                            <div class="form-group">
                                <button type="submit" class="btn" id="bouton_submit">
                                    Créer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>