<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Raid Industries</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>


<div id="login-container">
    <form action="process-login.php" method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</div>


<?php include 'php/footer.php'; ?>

</body>
</html>
