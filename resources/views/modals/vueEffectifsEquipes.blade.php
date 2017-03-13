<?php
use \App\Equipe;

$equipes = \App\Equipe::all();
foreach ($equipes as $equipe) {
    $equipeNom = $equipe->nom;
    echo '<b>'.$equipeNom.'</b>'.' : <br>';

    $users = $equipe->users()->get();
    foreach ($users as $user) {
        $userPrenom = $user->prenom;
        $userNom = $user->nom;
        echo ' '.$userPrenom.' '.$userNom.' <br>';
    }


}









