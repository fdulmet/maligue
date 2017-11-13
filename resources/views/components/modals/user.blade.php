@component('components.modals.base')
@slot('id')
profilJoueur
@endslot
@slot('title')
  Profil Joueur
@endslot
<div class="modal-dialog">

  <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update', ['userId' => Auth::user()->id])}}">
      {{ csrf_field() }}
      <div class="row form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
          <label for="last_name" class="col-md-4 control-label">Votre nom *</label>

          <div class="col-md-6">
              <input type="text" value="{{ Auth::user()->last_name }}" class="form-control" name="last_name" placeholder="" required>
              @if($errors->has('last_name'))
                  <div class="form-control-feedback">{{ $errors->first('last_name') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
          <label for="first_name" class="col-md-4 control-label">Votre prénom *</label>

          <div class="col-md-6">
              <input type="text" value="{{ Auth::user()->first_name }}" class="form-control" name="first_name" placeholder="" required>
              @if($errors->has('first_name'))
                  <div class="form-control-feedback">{{ $errors->first('first_name') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
          <label for="email" class="col-md-4 control-label">Votre email *</label>

          <div class="col-md-6">
              <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email" placeholder="" required>
              @if($errors->has('email'))
                  <div class="form-control-feedback">{{ $errors->first('email') }}</div>
              @endif
          </div>
      </div>

      <div class="row form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
          <label for="phone" class="col-md-4 control-label">Votre numéro de téléphone *</label>

          <div class="col-md-6">
              <input type="phone" value="{{ Auth::user()->phone }}" class="form-control" name="phone" placeholder="" required>
              @if($errors->has('phone'))
                  <div class="form-control-feedback">{{ $errors->first('phone') }}</div>
              @endif
          </div>
      </div>
      <button type="submit" class="btn btn-orange btn-block">Mettre à jour</button>
    </form>
  </div>
  @endcomponent
