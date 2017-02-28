@extends ('template')

@section ('content')
    <h4>
        Voici la liste des joueurs :
    </h4>
    @foreach ($joueurs as $joueur)
        <a href="{{ url('/joueurs', $joueur->id) }}">
            <div>
                {{ $joueur->prenom }} {{ $joueur->nom }}
            </div>
        </a>
    @endforeach
@stop
