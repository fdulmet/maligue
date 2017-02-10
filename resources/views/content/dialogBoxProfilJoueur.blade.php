<div class="row" id="dialogProfilJoueur" title="Profil Joueur">
    <form>
        <input type="text" name="nom" value="{{ Auth::user()->nom }}">
        <input type="submit" value="Submit">
    </form>
</div>

<?php

    $nouveauPrenom = 'Daniel';

    DB::table('users')
    ->where('id', 1)
    ->update(['prenom' => $nouveauPrenom]);
?>
