@extends('template')

@section('content')

    <h1>Complétez le formulaire</h1>
    <hr/>

    {!! Form::open(['url'=>'joueurs']) !!}
        <!-- c'est pour renvoyer sur une autre page une fois submitted-->
        <!-- on peut aussi utiliser route ou action -->
        @include('joueurs._form', ['texteDuBouton' => 'Envoyer'])
    {!! Form::close() !!}

    @include('errors.list')

@stop

<!--
on peut configurer des racourcis dans laravel => dans settings/search live templates
pour générer automatiquement les div
genre submitfield puis tab pour générer le div
-->


