<?php
// Démarrage de la session
session_start();

// Effacement de toutes les données de session
$_SESSION = array();

// Destruction de la session
session_destroy();

// Redirection vers la page de connexion ou la page d'accueil
header("Location: login.php");
exit;
?>
