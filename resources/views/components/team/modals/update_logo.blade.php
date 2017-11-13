@component('components.modals.base')
@slot('id')
updateTeamLogo
@endslot
@slot('title')
    Modifier le logo de l'équipe
@endslot
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('team.update', ['teamSlug' => $team->slug]) }}" id="formUpdateTeamLogo">
          {{ csrf_field() }}

            <div class="form-group">
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
            <div class="form-group">
                <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                    Mettre à jour le logo
                </button>
            </div>
    </div>
</div>

@endcomponent
