<?php
use \App\Equipe;

$equipes = \App\Equipe::all();
foreach ($equipes as $equipe)
{
    $equipeNom = $equipe->nom;
    echo '<b>'.$equipeNom.'</b>'.' : <br>';

    $users = $equipe->users()->get();
    foreach ($users as $user)
    {
        $userPrenom = $user->prenom;
        $userNom = $user->nom;
        $userCapitaine = $user->capitaine;
        if ($userCapitaine == 1)
        {
            echo $userPrenom.' '.$userNom.' (capitaine)<br>';
        }
        else
        {
            echo $userPrenom.' '.$userNom.' <br>';
        }
    }
}

@foreach( \App\Equipe::all() as $equipe )
    <?php /**/ $capitaine = \App\User::find($equipe->user_id) /**/ ?>
@endforeach









