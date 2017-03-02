<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmailController;

$userPrenom = Auth::user()->prenom;
$userNom = Auth::user()->nom;
?>
{{ $userPrenom }} {{ $userNom }} t'invite à rejoindre son équipe de foot-à-5, Les Matadors.
<br>
<!--{ { $contenu }}-->
<a href="https://maligue.fr/register">Accepter</a>



