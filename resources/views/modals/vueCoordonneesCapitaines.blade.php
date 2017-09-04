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
        @foreach($equipes as $equipe)
            <?php $capitaine = $equipe->users()->first(); ?>
            @if($capitaine)
                <tr>
                    <th scope="row">{{ $equipe->nom }}</th>
                    <td>{{ $capitaine->prenom }}</td>
                    <td>{{ $capitaine->nom }}</td>
                    <td>{{ $capitaine->tel }}</td>
                    <td>{{ $capitaine->email }}</td>
                </tr>
            @else
                <tr>
                    <th scope="row">{{ $equipe->nom }}</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endif

        @endforeach
    </tbody>
</table>
