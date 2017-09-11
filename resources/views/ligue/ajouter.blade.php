@extends('/layouts/app')

@section('banner')
    @include('_banner_guest')
@endsection

@section('content')
    <div class="container reset-password">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php dd($ligue); ?>
                <div class="card">
                    <div class="card-header">
                        Inscription
                    </div>
                    <div class="card-block">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('addLigue') }}">
                            {{ csrf_field() }}

                            <!--
                            <div class="row form-group{{ $errors->has('sport') ? ' has-danger' : '' }}">
                                <label for="sport" class="col-md-4 control-label">Sport *</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sport">
                                        <option value="Foot-à-5">Foot à cinq</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                    <div class="sportHidden">
                                        <br>
                                        <label for="sportText">Indiquez le sport</label>
                                        <input type="text" class="form-control" name="sportText" placeholder="" disabled id="sportText">
                                    </div>
                                    @if(isset($sport))
                                        <input type="hidden" name="hidden_sport" value="{{ $sport }}">
                                    @endif
                                    @if($errors->has('sport'))
                                        <div class="form-control-feedback">{{ $errors->first('sport') }}</div>
                                    @endif
                                </div>
                            </div>
                            -->

                            <div class="row form-group{{ $errors->has('ligue') ? ' has-danger' : '' }}">
                                <label for="ligue" class="col-md-4 control-label">Nom de la ligue *</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ligue" placeholder="" required @if(isset($ligue)) value="{{ $ligue }}" disabled @endif>
                                    @if(isset($ligue))
                                        <input type="hidden" name="hidden_ligue" value="{{ $ligue }}">
                                    @endif
                                    @if($errors->has('ligue'))
                                        <div class="form-control-feedback">{{ $errors->first('ligue') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('saison') ? ' has-danger' : '' }}">
                                <label for="saison" class="col-md-4 control-label">Nom de la saison *</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="saison" placeholder="" required @if(isset($saison)) value="{{ $saison }}" disabled @endif>
                                    @if(isset($saison))
                                        <input type="hidden" name="hidden_saison" value="{{ $saison }}">
                                    @endif
                                    @if($errors->has('saison'))
                                        <div class="form-control-feedback">{{ $errors->first('saison') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('equipe') ? ' has-danger' : '' }}">
                                <label for="equipe" class="col-md-4 control-label">Nom de l'équipe *</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="equipe" placeholder="" required @if(isset($equipe)) value="{{ $equipe }}" disabled @endif>
                                    @if(isset($equipe))
                                        <input type="hidden" name="hidden_equipe" value="{{ $equipe }}">
                                    @endif
                                    @if($errors->has('equipe'))
                                        <div class="form-control-feedback">{{ $errors->first('equipe') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                                <label for="nom" class="col-md-4 control-label">Votre nom *</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nom" placeholder="" required>
                                    @if($errors->has('nom'))
                                        <div class="form-control-feedback">{{ $errors->first('nom') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                                <label for="prenom" class="col-md-4 control-label">Votre prénom *</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="prenom" placeholder="" required>
                                    @if($errors->has('prenom'))
                                        <div class="form-control-feedback">{{ $errors->first('prenom') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="email" class="col-md-4 control-label">Votre email *</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="" required>
                                    @if($errors->has('email'))
                                        <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('email_confirmation') ? ' has-danger' : '' }}">
                                <label for="email_confirmation" class="col-md-4 control-label">Confirmez votre email *</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email_confirmation" placeholder="" required>
                                    @if($errors->has('email_confirmation'))
                                        <div class="form-control-feedback">{{ $errors->first('email_confirmation') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                <label for="tel" class="col-md-4 control-label">Votre numéro de téléphone *</label>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control" name="tel" placeholder="" required>
                                    @if($errors->has('tel'))
                                        <div class="form-control-feedback">{{ $errors->first('tel') }}</div>
                                    @endif
                                </div>
                            </div>

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

                                <!--
                            <hr>

                            <div class="row form-group{{ $errors->has('favorite_center') ? ' has-danger' : '' }}">
                                <label for="favorite_center" class="col-md-4 control-label">Choix du centre préféré *</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="favorite_center">
                                        <option value="Foot-à-5">Foot à cinq</option>
                                        <option value="Autre">Autre</option>
                                    </select>

                                    @if($errors->has('favorite_center'))
                                        <div class="form-control-feedback">{{ $errors->first('favorite_center') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('favorite_horaire') ? ' has-danger' : '' }}">
                                <label for="favorite_horaire" class="col-md-4 control-label">Choix de l'horaire préféré *</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="favorite_horaire">
                                        <option value="15">15h</option>
                                        <option value="17">17h</option>
                                        <option value="19">19h</option>
                                        <option value="21">21h</option>
                                    </select>

                                    @if($errors->has('favorite_horaire'))
                                        <div class="form-control-feedback">{{ $errors->first('favorite_horaire') }}</div>
                                    @endif
                                </div>
                            </div>
                            -->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-orange btn-block">
                                        Inscription
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
