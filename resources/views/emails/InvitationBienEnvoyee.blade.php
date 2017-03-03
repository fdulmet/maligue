<?php
use Request as FormRequest;

$emailInvite1 = FormRequest::input('emailInvite1');
?>

Vous avez bien invité {{ $emailInvite1 }} à rejoindre La New Team.
Une fois l'invitation acceptée, il apparaîtra dans l'effectif.