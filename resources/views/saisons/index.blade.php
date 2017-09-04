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
                    {!! link_to_route('saison.create', 'Créer une nouvelle saison', [], ['class' => 'btn btn-green']) !!}
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
                    @foreach($saisons as $saison)
                        <tr>
                            <td>{{ $saison->nom }}</td>
                            <td>{{ $ligues[$saison->ligue_id] }}</td>
                            <td>{{ Carbon\Carbon::parse($saison->date_start)->format('d/m/Y') }}</td>
                            <td>{{ Carbon\Carbon::parse($saison->date_end)->format('d/m/Y') }}</td>
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
