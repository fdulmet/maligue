<!--temporairement-->
{!! Form::hidden('user_id', 1) !!}

<div class="form-group">
{!! Form::label('nom', 'Nom:') !!}
{!! Form::text('nom', null, ['class' => 'form-control']) !!} <!--la classe provient de bootstrap-->
</div>

<div class="form-group">
    {!! Form::label('prenom', 'Prénom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('equipe', 'Equipe:') !!}
    {!! Form::text('equipe', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit($texteDuBouton, ['class' => 'btn btn-primary form-control']) !!} <!-- btn machin c'est des bootstraps specific classes -->
</div>