<div class="row header-saison">
    <div class="col">
        <h1>
            @if($currentLigue->logo)
                <img src="{{ url($currentLigue->logo) }}" alt="logo_ligue">
            @else
                <img src="{{ asset('images/logo-default.svg') }}" alt="logo_ligue">
            @endif
            {{ $currentLigue->nom }}

            <div class="dropdown dropdown-equipe">
                <a class="btn btn-secondary dropdown-toggle btn-dropdown-orange" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $currentSaison->nom }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($saisons as $saison)
                        <a class="dropdown-item" href="{{ route('switchSaison', ['saisonId' => $saison->id]) }}">{{ $saison->nom }}</a>
                    @endforeach
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/" target="_blank">2016-17</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2015-2016.php" target="_blank">2015-16</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2014-2015.php" target="_blank">2014-15</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2013-2014.php" target="_blank">2013-14</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2012-2013.php" target="_blank">2012-13</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2012-2013.php" target="_blank">2011-12</a>
                    <a class="dropdown-item" href="http://laliguedespingouins.fr/2012-2013.php" target="_blank">2010-11</a>
                </div>
            </div>
        </h1>
    </div>

    <div class="col buttons">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#coordonneesCapitaines">
                    Coordonnées capitaines
                </button>
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#effectifsEquipes">
                    Effectifs équipes
                </button>

                @if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue())
                    {!! link_to_route('saison.index', 'Saisons', [], ['class' => 'btn btn-green']) !!}
                @endif

                <!--
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#reglesReports">
                    Règlement ligue
                </button>
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#reglesFootACinq">
                    Règles foot-à-5
                </button>
                -->
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#reglesReports">
                    Règlement pour les reports
                </button>

                @if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue())
                    {!! link_to_route('matchs.index', 'Matchs', [], ['class' => 'btn btn-green']) !!}
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        @include ('content._classement')
    </div>
    <div class="col-md-6">
        @include ('content._calendrier')
    </div>
</div>

<!--
<div class="row">
    <div class="col-md-11" id="cadeaux">
        at include ('content._cadeaux')
    </div>
</div>
-->

