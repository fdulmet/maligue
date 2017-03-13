<?php
use Request as FormRequest;
$emailInvite1 = FormRequest::input('emailInvite1');
?>

Vous avez bien invité {{ $emailInvite1 }} à rejoindre
<?php
$equipes = Auth::user()->equipes()->get();
foreach ($equipes as $equipe)
{
    echo $equipe->nom;
}
?>
.
<br>
Une fois l'invitation acceptée, il apparaîtra dans l'effectif.