<ul>
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Se connecter</a></li>
        <li><a href="{{ url('/register') }}">S'inscrire</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="prenom_nom">
                {{ Auth::user()->prenom }} {{ Auth::user()->nom }}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a style="color: black; cursor:pointer;" id="openerProfilJoueur">Profil Joueur</a>
                    @include ('content.dialogBoxProfilJoueur')
                </li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <div id="dropdownMenu">Déconnexion</div>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>