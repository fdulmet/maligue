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
        @foreach($currentLigue->equipes()->get() as $equipe)
            <?php $capitaine = \App\User::find($equipe->user_id); ?>
            <tr>
                <th scope="row">{{ $equipe->nom }}</th>
                <td>{{ $capitaine->prenom }}</td>
                <td>{{ $capitaine->nom }}</td>
                <td>{{ $capitaine->tel }}</td>
                <td>{{ $capitaine->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
