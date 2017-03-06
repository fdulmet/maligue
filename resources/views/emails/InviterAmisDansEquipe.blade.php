<?php
use Illuminate\Support\Facades\Auth;
$userPrenom = Auth::user()->prenom;
$userNom = Auth::user()->nom;
?>
<!--le titre du mail est dans le controller ($message->subject)-->
{{ $userPrenom }} {{ $userNom }} t'invite à rejoindre son équipe.<br>

<br>Equipe :
<?php
    $equipes = Auth::user()->equipes()->get();
    foreach ($equipes as $equipe) {
        echo $equipe->nom;
    }
?>

<br>Ligue :
<?php
    $equipes = Auth::user()->equipes()->get();
    $ligues = App\Equipe::find($equipes)->ligues()->get();
    foreach ($ligues as $ligue) {
        echo $ligue->nom;
    }
?>

<br>Sport :
<?php
    $equipes = Auth::user()->equipes()->get();
    $sports = App\Equipe::find($equipes)->ligues()->get();
    foreach ($sports as $sport) {
        echo $sport->sport;
    }
?>

<br><br>
<a href="https://maligue.fr/register?equipe={{ $equipe->nom }}">S'inscrire</a>



