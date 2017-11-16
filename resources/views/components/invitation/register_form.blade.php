<div class="card">
    <div class="card-header">
        Créer un compte
    </div>
    <div class="card-block">
    <div class=" form-group{{ $errors->has('register.last_name') ? ' has-error' : '' }}" >
      <label for="register_last_name">Nom</label>
        <input id="register_last_name" value="{{old('register.last_name')}}" type="text" class="form-control" name="register[last_name]" placeholder="Ben Arfa *" required>
        @if ($errors->has('register.last_name'))
        <span class="help-block">
            <strong>{{ $errors->first('register.last_name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('register.first_name') ? ' has-error' : '' }}" >
      <label for="register_first_name">Prénom</label>
        <input id="register_first_name" value="{{old('register.first_name')}}" type="text" class="form-control" name="register[first_name]" placeholder="Hatem *" required>
        @if ($errors->has('register.first_name'))
        <span class="help-block">
            <strong>{{ $errors->first('register.first_name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('register.phone') ? ' has-error' : '' }}" >
      <label for="register_phone">Téléphone</label>
        <input id="register_phone" value="{{old('register.phone')}}" type="text" class="form-control" name="register[phone]" placeholder="0612345678">
        @if ($errors->has('register.phone'))
        <span class="help-block">
            <strong>{{ $errors->first('register.phone') }}</strong>
        </span>
        @endif
    </div>

    <div class=" form-group{{ $errors->has('register.password') ? ' has-error' : '' }}" >
      <label for="register_password">Mot de passe</label>
        <input id="register_password" type="password" class="form-control" name="register[password]" placeholder="mot de passe *" required>
        @if ($errors->has('register.password'))
        <span class="help-block">
                <strong>{{ $errors->first('register.password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group" >
        <label for="register_password_confirmation">Confirmation du mot de passe</label>
        <input id="register_password_confirmation" type="password" class="form-control" name="register[password_confirmation]" placeholder="répéter le mot de passe *" required>
    </div>
  </div>
</div>
