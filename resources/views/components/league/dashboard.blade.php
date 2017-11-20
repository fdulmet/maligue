@include('components.league.modals.captain_information')
@include('components.league.modals.teams_information')
@include('components.league.modals.invite_to_league')
@include('components.league.modals.reward')
@include('components.modals.delay_rules')
@if ($league->slug === 'la-ligue-des-pinguoins')
  @include('components.season.modals.oldseasons.2011-2010')
  @include('components.season.modals.oldseasons.2012-2011')
  @include('components.season.modals.oldseasons.2013-2012')
  @include('components.season.modals.oldseasons.2014-2013')
  @include('components.season.modals.oldseasons.2015-2014')
  @include('components.season.modals.oldseasons.2016-2015')
  @include('components.season.modals.oldseasons.2017-2016')
@endif
<div class="row header-saison">
    <div class="col-md-12">
        <h1>
            @if($league->logo)
                <img src="{{ url($league->logo) }}" alt="logo_ligue">
            @else
                <img src="{{ asset('images/logo-default.svg') }}" alt="logo_ligue">
            @endif
            {{ $league->name }}
            <div class="dropdown dropdown-equipe">
                <a class="btn btn-secondary dropdown-toggle btn-dropdown-orange" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{$season->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($league->seasons as $s)
                        <a class="dropdown-item" href="{{ route('league.season.team.dashboard', [ 'leagueSlug' => $league->slug,
                                                                                                  'seasonSlug' => $s->slug,
                                                                                                  'teamSlug' => $team->slug]) }}">{{ $s->name }}</a>
                    @endforeach
                    @if ($league->slug === 'la-ligue-des-pinguoins')
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2017-2016">2016-2017</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2016-2015">2015-2016</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2015-2014">2014-2015</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2014-2013">2013-2014</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2013-2012">2012-2013</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2012-2011">2011-2012</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2011-2010">2010-2011</a>
                    @endif
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

                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#reglesReports">
                    Règlement pour les reports
                </button>
                <button type="button" class="btn btn-green" data-toggle="modal" data-target="#reward">
                    Récompenses
                </button>
                @if(Auth::user()->isAdmin || Auth::user()->id === $league->owner->id)
                  <a href="{{route('league.season.index', ['leagueSlug' => $league->slug ])}}" class='btn btn-green'>Saisons</a>
                  <a href="{{route('league.season.game.index', ['leagueSlug' => $league->slug, 'seasonSlug' => $season->slug])}}" class='btn btn-green'>Matchs</a>
                @endif

            </div>
        </div>
    </div>
</div>

<div class="row">
  @include('components.season.dashboard', ['season' => $season])
</div>
