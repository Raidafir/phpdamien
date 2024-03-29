<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$is_premium = isset($_SESSION['user_id']) && $_SESSION['Premium'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Premium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        .premium-content-gif {
            width: 100%;
            height: 500px; 
            background: url('media/accesdenied.gif') center center no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php include 'php/header.php'; ?>
    <?php include 'php/nav.php'; ?>

    <div id="main">
        <?php if (!$is_premium): ?>
            <div class="premium-content-gif"></div>
        <?php else: ?>
            <h2>Bienvenue sur le contenu premium</h2>
            <p>Les differents projet de Raid :</p>
            <ul>
             <li><a href="https://github.com/Raidafir/mtproxy"> Serveurs proxy Telegram</a></li>
             <li><a href="https://github.com/Raidafir/Scanner-Nmap"> Scanner Nmap via Python</a></li>
             <li><a href="https://github.com/Raidafir/phpdamien"> Projet de ce site</a></li>
            </ul>
        <?php endif; ?> 
    </div>

    <?php include 'php/footer.php'; ?>
</body>
</html>