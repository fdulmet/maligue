@extends ('template')

@section ('content')
    <h1>Voici la liste des joueurs :</h1>

    @foreach ($joueurs as $joueur)

        <a href="{{ action('JoueursController@show', [$joueur->id]) }}">
        <!--The action function generates a URL for the given controller action.-->
            {{ $joueur->prenom }} {{ $joueur->nom }}<br />
        </a>
    @endforeach

    <!-- OU : -->
    @foreach ($joueurs as $joueur)

        <a href="{{ url('/joueurs', $joueur->id) }}">
        <!--url est une fonction-->
            {{ $joueur->prenom }} {{ $joueur->nom }}<br />
        </a>
    @endforeach

    <!-- OU :  route('joueur_path') -->

@stop