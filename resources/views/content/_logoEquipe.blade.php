<?php
use Illuminate\Support\Facades\Auth;
use App\User;
$authEquipe = Auth::user()->equipes()->get();
foreach ($authEquipe as $authEquipe) {
    $logoAuthEquipe = $authEquipe->logo;
    echo '<img src="'.$logoAuthEquipe.'" alt="logo les zobs" style="width:240px;height:149px;">';
    //var_dump ($logoAuthEquipe);
}
//echo '<img src="../../../public/logo_equipe_lesZobs.png" alt="logo les zobs" style="width:auto;height:auto;">';
?>