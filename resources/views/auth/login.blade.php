@extends('layouts.main')
@section('content')
<div class="container-fluid content-login">
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-4">
          <div id="cardLogin" class="card">
            <div class="card-header text-center">
                Connexion
            </div>
            <div class="card-block">
                <form role="form" method="POST" action="/login">
                    {{ csrf_field() }}

                    <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="inputEmailForm" class="sr-only control-label">Email</label>
                        <div class="offset-sm-2 col-sm-8">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="inputEmailForm" placeholder="email" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="inputPasswordForm" class="sr-only control-label">Password</label>
                        <div class="offset-sm-2 col-sm-8">
                            <input type="password" name="password" class="form-control" id="inputPasswordForm" placeholder="mot de passe" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-8 text-center">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Mot de passe oublié ?</a>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-8 text-center">
                            <button type="submit" class="btn btn-orange btn-block">Se connecter</button>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div>
                            <div class="checkbox" id="se_souvenir_de_moi">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
