@if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue())
<div class="row" id="menu_admin">
    <div class="col-md-12">
        {!! link_to_route('saison.index', 'Saisons', [], ['class' => 'btn btn-green']) !!}
        {!! link_to_route('matchs.index', 'Matchs', [], ['class' => 'btn btn-green']) !!}

        <div class="col-md-8">
            @if(isset($currentLigue))
                @include('banner._saisonsDropdownMenu')
            @endif
        </div>
    </div>
</div>
@endif

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
                </div>
            </div>
        </h1>
    </div>

    <div class="col buttons">
        <div class="col">
            @include('layouts.modal', ['id' => 'coordonneesCapitaines', 'titre' => 'Coordonnées capitaines', 'body' => 'modals.vueCoordonneesCapitaines'])
            @include('layouts.modal', ['id' => 'effectifsEquipes', 'titre' => 'Effectifs équipes', 'body' => 'modals.vueEffectifsEquipes'])
        </div>
        <div class="col">
            @include('layouts.modal', ['id' => 'reglesReports', 'titre' => 'Règlement ligue', 'body' => 'modals.vueReglesReports'])
            @include('layouts.modal', ['id' => 'reglesFootACinq', 'titre' => 'Règles foot-à-5', 'body' => 'modals.vueReglesFootACinq'])
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

