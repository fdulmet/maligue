@extends('layouts.app')

@section('banner')
    @include('_banner')
@stop

@section('invitationEnvoyee')
    <?php
    use Request as FormRequest;
    $emailInvite1 = FormRequest::input('emailInvite1');
    ?>
    <div style="color : red; font-weight: bold; padding: 0.5% 0 0 0; text-align: right;">
        Votre avez invité {{ $emailInvite1 }} à rejoindre
        <?php
        $equipes = App\User::find(1)->equipes()->get();
        foreach ($equipes as $equipe)
        {
            echo $equipe->nom;
        }
        ?>
        .<br>
    </div>
@endsection

@section('content')
    @include ('_content')
@endsection

