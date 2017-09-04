@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    {!! link_to_route('matchs.create', 'Créer un nouveau match', [], ['class' => 'btn btn-green']) !!}
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-main table-sm table-hover table-small">
                    <thead>
                    <tr>
                        <th class="lieu">Lieu</th>
                        <th class="date">Date</th>
                        <th class="team1">Equipe 1</th>
                        <th class="team2">Equipe 2</th>
                        <th class="saison st-sort">Saison</th>
                        <th class="ligue st-sort">Ligue</th>
                        <th class="report st-sort">Report</th>
                        <th class="actions">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($games as $game)
                        <tr>
                            <td>{{ $game->lieu }}</td>
                            <td>{{ Carbon\Carbon::parse($game->date)->format('d/m/Y') }} {{ $game->heure  }}</td>
                            <td>{{ $game->first_team }}</td>
                            <td>{{ $game->second_team }}</td>
                            <td>{{ $saisonsList[$game->season_id] }}</td>
                            <td>{{ $ligues[$game->ligue_id] }}</td>
                            <td>
                                @if(!is_null($game->lieu_report))
                                    <strong>Lieu:</strong> {{ $game->lieu_report }}
                                @endif
                                @if(!is_null($game->date_report))
                                    <br><strong>Date:</strong> {{ Carbon\Carbon::parse($game->date_report)->format('d/m/Y') }} {{ $game->heure_report  }}
                                @endif
                            </td>
                            <td>
                                {!! link_to_route('matchs.edit', 'Modifier', ['matchId' => $game->id], ['class' => 'btn btn-green']) !!}
                                {!! link_to_route('matchs.destroy', 'Supprimer', ['matchId' => $game->id], ['class' => 'btn btn-orange btn-block']) !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
