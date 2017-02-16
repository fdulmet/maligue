<h1>Modifier : {!! $joueur->nom !!}</h1>

{!! Form::model($joueur, ['method'=>'PATCH', 'action' => ['JoueursController@update', $joueur->id]]) !!}
<!-- on peut aussi utiliser route ou url : 'url' => 'joueurs/' . $joueur->id]-->
<!-- c'est pour renvoyer sur une autre page une fois submitted-->
@include('joueurs._form', ['texteDuBouton' => 'Modifier'])
{!! Form::close() !!}

@include('errors.list')