<!--le titre du mail est dans le controller ($message->subject)-->

{{ $inviteurPrenom }} {{ $inviteurNom }} t'invite à rejoindre son équipe.<br>

<br>Equipe : {{ $equipe }}

<br>Ligue : {{ $ligue }}

<br>Sport : {{ $sport }}

<br><br>
<a href="https://maligue.fr/register?equipe={{ $equipe }}">S'inscrire</a>



