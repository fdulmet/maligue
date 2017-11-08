@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <br>
                    <a href="{{route('web_season_create')}}" class='btn btn-green'>Créer une nouvelle saison</a>
                    <br>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-main">
                    <thead>
                        <tr>
                            <th class="nom">Nom</th>
                            <th class="ligue">Ligue</th>
                            <th class="date_start st-sort">Date de début</th>
                            <th class="date_end st-sort">Date de fin</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($seasons as $season)
                        <tr>
                            <td>{{ $season->name }}</td>
                            <td>{{ $season->league->name }}</td>
                            <td>{{ $season->date_start}}</td>
                            <td>{{ $season->date_end }}</td>
                            <td>
                                <a href="#" class="btn btn-green">Modifier</a>
                                <a href="#" class="btn btn-orange btn-block">Archiver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            </div>
        </div>
@endsection
