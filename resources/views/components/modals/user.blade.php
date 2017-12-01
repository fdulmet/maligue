@component('components.modals.base')
@slot('id')
profilJoueur
@endslot
@slot('title')
  Profil Joueur
@endslot
  <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update', ['userId' => Auth::user()->id])}}">
      {{ csrf_field() }}
      <div class="row form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
          <label for="last_name" class="col-md-4 control-label">Votre nom</label>

          <div class="col-md-6">
              <input type="text" value="{{ Auth::user()->last_name }}" class="form-control" name="last_name" placeholder="">
              @if($errors->has('last_name'))
                  <div class="form-control-feedback">{{ $errors->first('last_name') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
          <label for="first_name" class="col-md-4 control-label">Votre prénom</label>

          <div class="col-md-6">
              <input type="text" value="{{ Auth::user()->first_name }}" class="form-control" name="first_name" placeholder="">
              @if($errors->has('first_name'))
                  <div class="form-control-feedback">{{ $errors->first('first_name') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
          <label for="email" class="col-md-4 control-label">Votre email</label>

          <div class="col-md-6">
              <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email" placeholder="">
              @if($errors->has('email'))
                  <div class="form-control-feedback">{{ $errors->first('email') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
          <label for="phone" class="col-md-4 control-label">Votre numéro de téléphone</label>

          <div class="col-md-6">
              <input type="text" value="{{ Auth::user()->phone }}" class="form-control" name="phone" placeholder="">
              @if($errors->has('phone'))
                  <div class="form-control-feedback">{{ $errors->first('phone') }}</div>
              @endif
          </div>
      </div>
      <div class="row form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
          <label for="phone" class="col-md-4 control-label">Mot de passe</label>

          <div class="col-md-6">
              <input type="password" class="form-control" name="password" placeholder="">
              @if($errors->has('password'))
                  <div class="form-control-feedback">{{ $errors->first('password') }}</div>
              @endif
          </div>
      </div>
      <div class="row form-group">
          <label for="password_confirmation" class="col-md-4 control-label">Confirmer votre mot de passe</label>

          <div class="col-md-6">
              <input type="password" class="form-control" name="password_confirmation" placeholder="">
          </div>
      </div>
      <button type="submit" class="btn btn-orange btn-block">Mettre à jour</button>
    </form>
  @endcomponent
