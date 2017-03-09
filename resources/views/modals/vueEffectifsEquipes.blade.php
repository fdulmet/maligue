<?php
$user = DB::table('users')->get();
foreach ($user as $user) {
$prenom = $user->prenom;
$nom = $user->nom;
echo $prenom.' '.$nom.'<br>';
}
