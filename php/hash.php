<?php
$motDePasse = 'mafir';
$motDePasseHache = password_hash($motDePasse, PASSWORD_DEFAULT);
echo $motDePasseHache;
?>

