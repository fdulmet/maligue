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
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2017-2016" href=''>2016-17</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2016-2015" href=''>2015-16</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2015-2014" href=''>2014-15</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2014-2013" href=''>2013-14</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2013-2012" href=''>2012-13</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2012-2011" href=''>2011-12</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#oldSeason-2011-2010" href=''>2010-11</a>
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
                @if (Auth::user()->isAdmin)
                <a href="{{route('team.index')}}" class='btn btn-green'>Equipes</a>
                @endif

            </div>
        </div>
    </div>
</div>

<div class="row">
  @include('components.season.dashboard', ['season' => $season])
</div>
