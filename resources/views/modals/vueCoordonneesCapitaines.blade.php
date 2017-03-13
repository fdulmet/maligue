<?php
use \App\User;

$users = \App\User::all();
foreach ($users as $user)
{
    $capitaine = $user->capitaine;
    if ($capitaine==1)
        {
            $tableEquipe = $user->equipes()->get();
                foreach ($tableEquipe as $tableEquipe)
                    {
                        $equipe = $tableEquipe->nom;
                    }
            $prenom = $user->prenom;
            $nom = $user->nom;
            $tel = $user->tel;
            $email = $user->email;
            echo $equipe.'&nbsp;&nbsp;&nbsp;&nbsp;'.$prenom.'&nbsp;'.$nom.'&nbsp;&nbsp;&nbsp;&nbsp;'.$tel.'&nbsp;&nbsp;&nbsp;&nbsp;'.$email.'<br><br>';
        }

    }