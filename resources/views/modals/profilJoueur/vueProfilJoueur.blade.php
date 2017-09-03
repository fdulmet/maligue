<div class="modal fade" id="profilJoueur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update', Auth::user()->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profil Joueur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                        <label for="nom" class="col-md-4 control-label">Votre nom *</label>

                        <div class="col-md-6">
                            <input type="text" value="{{ $user->nom }}" class="form-control" name="nom" placeholder="" required>
                            @if($errors->has('nom'))
                                <div class="form-control-feedback">{{ $errors->first('nom') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                        <label for="prenom" class="col-md-4 control-label">Votre prénom *</label>

                        <div class="col-md-6">
                            <input type="text" value="{{ $user->prenom }}" class="form-control" name="prenom" placeholder="" required>
                            @if($errors->has('prenom'))
                                <div class="form-control-feedback">{{ $errors->first('prenom') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="email" class="col-md-4 control-label">Votre email *</label>

                        <div class="col-md-6">
                            <input type="email" value="{{ $user->email }}" class="form-control" name="email" placeholder="" required>
                            @if($errors->has('email'))
                                <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                        <label for="tel" class="col-md-4 control-label">Votre numéro de téléphone *</label>

                        <div class="col-md-6">
                            <input type="tel" value="{{ $user->tel }}" class="form-control" name="tel" placeholder="" required>
                            @if($errors->has('tel'))
                                <div class="form-control-feedback">{{ $errors->first('tel') }}</div>
                            @endif
                        </div>
                    </div>

                    <!--
                    <div class="row form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <label for="password" class="col-md-4 control-label">Mot de passe *</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="" required>
                            @if($errors->has('password'))
                                <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                        <label for="password_confirmation" class="col-md-4 control-label">Répéter le mot de passe *</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="" required>
                            @if($errors->has('password_confirmation'))
                                <div class="form-control-feedback">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>
                    </div>
                    -->

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-green" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-orange btn-block">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
</div>