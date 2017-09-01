<div class="container-fluid">
    <div class="row no-gutters" id="banner">
        <div class="col col-md-8 banner-left">
            <h2>
                <a href="{{ url('/') }}" id="logoSite"><img src="{{ asset('images/logo_maligue.svg') }}"></a>
            </h2>
        </div>
        <div class="col col-md-4 banner-right">
            <div class="container-fluid">
                <div class="row align-items-end justify-content-end">
                    <div class="col">
                        <div class="btn-dropdown dropdown">
                            <a class="btn dropdown-toggle btn-orange" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profilJoueur">Profil Joueur</a>
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <a href="#" role="button" class="btn btn-orange btn-contact" data-toggle="modal" data-target="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
