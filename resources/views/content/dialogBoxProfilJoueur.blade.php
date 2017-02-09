<div id="dialogProfilJoueur" title="Profil Joueur">
    <p>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</p>
    <p>{{ Auth::user()->equipe }}</p>
    <p>{{ Auth::user()->ligue }}</p>
    <p>{{ Auth::user()->email }}</p>
    <p>{{ Auth::user()->tel }}</p>
</div>