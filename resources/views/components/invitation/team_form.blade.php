<div class="card">
    <div class="card-header">
        Créer une équipe
    </div>
    <div class="card-block">
    <div class=" form-group{{ $errors->has('team.name') ? ' has-error' : '' }}">
        <label for="team_name">Nom de l'équipe</label>
        <input id='team_name' value="{{old('team.name')}}" type="text" class="form-control" name="team[name]" placeholder="Mon équipe" required>
        @if ($errors->has('register.name'))
        <span class="help-block">
            <strong>{{ $errors->first('register.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
      <div class="fileupload fileupload-new" data-provides="fileupload">
          <span class="btn btn-orange btn-file">
          <span class="fileupload-new">Choisir un logo</span>
          <span class="fileupload-exists">Choisir une autre logo</span>
              <input name="team[logo]" type="file">
          </span>
          <span class="fileupload-preview"></span>
          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
      </div>
    </div>
  </div>
</div>
