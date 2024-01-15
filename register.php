<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>
<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Inscription</h2>

    <form action="process-register.php" method="post" enctype="multipart/form-data">
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="profile_picture">Photo de profil:</label><br>
        <input type="file" id="profile_picture" name="profile_picture" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
