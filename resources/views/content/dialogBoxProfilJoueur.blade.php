<table class="table table-striped">
    <thead>
    <tr>
        <th>nom</th>
        <th>prénom</th>
    </tr>
    </thead>

    <tbody>

    @foreach($users as $user)
        <tr>
            <td>{{$user->nom}}</td>
            <td>{{$inventory->prenom}}</td>
            <td>
                {{--Need the button to open up my edit form--}}
                <button formaction="computers/{id}/edit">{{ trans('computers.edit') }}</button>
                {{--<input type="submit" name="update" id="update" value="Update" class="btn btn-primary">--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="row" id="dialogProfilJoueur" title="Profil Joueur">
    <form>
        <input> {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        {{ Auth::user()->equipe }}
        {{ Auth::user()->email }}
    </form>
</div>

<?php

    $nouveauPrenom = 'Daniel';

    DB::table('users')
    ->where('id', 1)
    ->update(['prenom' => $nouveauPrenom]);
?>

