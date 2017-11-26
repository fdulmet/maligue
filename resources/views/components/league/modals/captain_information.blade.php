@component('components.modals.base')
@slot('title')
        Coordonnées capitaines
@endslot
@slot('id')
coordonneesCapitaines
@endslot
<table class="table">
    <thead>
        <tr>
            <th>Equipe</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($league->teams as $team)
            @if($team->captain)
                <tr>
                    <th scope="row">{{ $team->name }}</th>
                    <td>{{ $team->captain->first_name }}</td>
                    <td>{{ $team->captain->last_name }}</td>
                    <td>{{ $team->captain->phone }}</td>
                    <td>{{ $team->captain->email }}</td>
                </tr>
            @else
                <tr>
                    <th scope="row">{{ $team->name }}</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endif

        @endforeach
    </tbody>
</table>
@endcomponent
