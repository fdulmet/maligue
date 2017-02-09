@extends('template')

@section('content')

    <h1>Complétez le formulaire</h1>

    <hr/>

    <!-- on peut rentrer manuellement un <form></form> -->
    <!-- OU : -->

    {!! Form::open(['url'=>'joueurs']) !!} <!-- on peut aussi utiliser route ou action -->
                                            <!-- c'est pour renvoyer sur une autre page une fois submitted (?) -->

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
            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary form-control']) !!} <!-- btn machin c'est des bootstraps specific classes -->
        </div>

    {!! Form::close() !!}



@stop

<!--
on peut configurer des racourcis dans laravel => dans settings/search live templates
pour générer automatiquement les div
genre submitfield puis tab pour générer le div

<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', 'mon nom', ['class' => 'form-control', 'foo'=> 'bar']) !!}
</div>
-->