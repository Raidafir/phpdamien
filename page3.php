<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Vérifiez si l'utilisateur est connecté et a le statut premium
if (isset($_SESSION['user_id']) && $_SESSION['Premium']) {
    echo "Bienvenue sur la page Premium!";
    // Affichez le contenu premium ici
} else {
    echo "Désolé, cette page est réservée aux utilisateurs Premium.";
    // Vous pouvez également inclure un lien ou un bouton pour devenir premium
}
?>


<div id="main">
    <h2>Премиум</h2>
    <p>Contenu</p>
</div>

<?php include 'php/footer.php'; ?>
