@extends('/layouts/app')

@section('banner')
    @include('_banner_guest')
@endsection

@section('content')
<div class="container-fluid reset-password">
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Réinitialisation du mot de passe
                </div>
                <div class="card-block">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only control-label">Email</label>
                            <div class="offset-sm-2 col-sm-8">
                                <input id="email" type="email" name="email" value="{{ $email or old('email') }}" class="form-control" placeholder="Adresse email" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="inputPasswordForm" class="sr-only control-label">Mot de passe</label>
                            <div class="offset-sm-2 col-sm-8">
                                <input type="password" name="password" class="form-control" id="inputPasswordForm" placeholder="Mot de passe" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="sr-only control-label">{{ trans('passwords.password_confirm') }}</label>
                            <div class="offset-sm-2 col-sm-8">
                                <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirmer mot de passe" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-orange btn-block">
                                    Réinitialiser le mot de passe
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
