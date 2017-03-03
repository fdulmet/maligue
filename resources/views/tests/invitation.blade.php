{!! Form::open(['route' => 'inviterAmisDansEquipe', 'method' => 'get']) !!}
<div class="form-group">
    <!--
    { !! Form::label('contenu', 'contenu') !!}
    { !! Form::text('contenu', null, ['class'=>'form-control']) !!}
    -->
    {!! Form::label('emailInvite1', 'email ami 1 :') !!}
    {!! Form::text('emailInvite1', null, ['class'=>'form-control']) !!}

    {!! Form::label('emailInvite2', 'email ami 2 :') !!}
    {!! Form::text('emailInvite2', null, ['class'=>'form-control']) !!}

    {!! Form::submit('Envoyer', ['class' => 'btn']) !!}
</div>
{!! Form::close() !!}