<?php
//On prend les equipe_id
$equipes = DB::table('equipes')->get();
foreach ($equipes as $equipe) {
    $equipeId = $equipe->id;
}

//On prend les user_id
$users = DB::table('users')->get();
foreach ($users as $user) {
    $userId = $user->id;
}

//On classe joueurs selon équipes
$equipes_users = DB::table('equipe_user')->get();
foreach ($equipes_users as $equipe_user) {
    $equipe_id = $equipe_user->equipe_id;
    $user_id = $equipe_user->user_id;
}

if ($equipeId== $equipe_id)
    {

    }


echo $prenom.' '.$nom.'<br>';
