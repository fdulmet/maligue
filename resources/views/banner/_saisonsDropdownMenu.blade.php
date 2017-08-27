<ul id="saisonsDropdownMenu">
    <li class="dropdown">
        <br>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="titreSaisons">
            Saison {{ $currentSaison->nom }}<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">

            @foreach($saisons as $saison)
                <li>
                    <a href="?saison={{ $saison->id }}">
                        <div id="dropdownMenu">{{ $saison->nom }}</div>
                    </a>
                </li>
            @endforeach

            @for($annee = $anneeDuDernierMatchProgramme -1; $annee >= 2010; $annee--)
                <li>
                    @if( $annee + 1 == 2017 )
                        <a href="http://laliguedespingouins.fr/" target="_blank">
                            <div id="dropdownMenu">{{ $annee }}-{{ $annee + 1 }}</div>
                        </a>
                    @else
                        <a href="http://laliguedespingouins.fr/{{ $annee }}-{{ $annee + 1 }}.php" target="_blank">
                            <div id="dropdownMenu">{{ $annee }}-{{ $annee + 1 }}</div>
                        </a>
                    @endif
                </li>
            @endfor

        </ul>
    </li>
</ul>

