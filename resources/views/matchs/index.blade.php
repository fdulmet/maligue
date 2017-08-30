@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <br>
            <br>
            {!! link_to_route('matchs.create', 'Créer un nouveau match', [], ['class' => 'btn btn-primary']) !!}
            <br>
            <br>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-main">
                    <thead>
                    <tr>
                        <th class="lieu">Lieu</th>
                        <th class="date">Date</th>
                        <th class="team1">Equipe 1</th>
                        <th class="team2">Equipe 2</th>
                        <th class="saison st-sort">Saison</th>
                        <th class="ligue st-sort">Ligue</th>
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
                                <a href="#" class="btn btn-primary">Modifier</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
