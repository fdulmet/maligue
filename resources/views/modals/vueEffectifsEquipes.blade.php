@foreach($equipes as $equipe)
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="logoEquipe pull-left">
                        @if($equipe->logo != '')
                            <img src="{{ url($equipe->logo) }}">
                        @else
                            <img src="{{ asset('images/logo-default.svg') }}">
                        @endif
                    </div>
                    <div class="media-body">
                        <h5><strong>{{ $equipe->nom }}</strong></h5>
                        <ul>
                        @foreach($equipe->users()->get() as $joueur)
                            <li>
                            @if($joueur->isCapitaine())
                                {{ $joueur->prenom  }} {{ $joueur->nom }} (capitaine)
                            @else
                                {{ $joueur->prenom  }} {{ $joueur->nom }}
                            @endif
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <br>
@endforeach