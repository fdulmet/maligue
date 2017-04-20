<!--

<ul id="saisonsDropdownMenu">
    <li class="dropdown">
        <br>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="titreSaisons">
            Saisons<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">

            @for($annee = $anneeDuDernierMatchProgramme-1; $annee >= 2010; $annee--)
            <li>
                <a href="{{ $annee }}-{{ $annee + 1 }}">
                    <div id="dropdownMenu">{{ $annee }}-{{ $annee + 1 }}</div>
                </a>
            </li>
            @endfor
        </ul>
    </li>
</ul>

-->
