<!--le titre du mail est dans InviterAmiACreerEquipeController ($message->subject)-->

{{ $inviteurPrenom }} {{ $inviteurNom }} vous invite à créer une nouvelle équipe.

<br>Ligue : {{ $ligue }}

<br>Sport : {{ $sport }}

<br><br>
<a href="https://maligue.fr/register?ligue={{ $ligue }}">S'inscrire</a>