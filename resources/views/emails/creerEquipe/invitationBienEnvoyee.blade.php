<?php
use Request as FormRequest;
$emailInvite1 = FormRequest::input('emailInvite1');
?>

Vous avez bien invité {{ $emailInvite1 }} à rejoindre
<?php
    $entreeEquipe = Auth::user()->equipes()->get();
    $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
    foreach ($ligue as $ligue) {
        echo $ligue = $ligue->nom;
    }
?>
.
