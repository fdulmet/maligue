<div id="createNewTeam" class="modal fade" role="dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('equipe.store') }}" id="formCreateNewTeam" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Créer une nouvelle équipe dans {{ $currentLigue->nom  }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    {{ Form::label('nom', 'Nom de l\'équipe') }}
                                    {{ Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom de l\'équipe...']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('logo', 'Logo de l\'équipe') }}
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-orange btn-file">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-green" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-orange btn-block">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>