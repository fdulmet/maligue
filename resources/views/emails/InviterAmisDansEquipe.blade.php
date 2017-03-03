<?php
use Illuminate\Support\Facades\Auth;

$userPrenom = Auth::user()->prenom;
$userNom = Auth::user()->nom;
?>
{{ $userPrenom }} {{ $userNom }} t'invite à rejoindre son équipe de foot-à-5,
<?php
$equipes = App\User::find(1)->equipes()->get();
foreach ($equipes as $equipe)
{
    echo $equipe->nom;
}
?>
.
<br>
<a href="https://maligue.fr/register?equipe={{ $equipe->nom }}">Accepter</a>



