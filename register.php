<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>
<?php
// Vous pouvez ajouter ici le code PHP pour gérer le processus d'inscription si nécessaire

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <!-- Ajoutez ici vos styles ou fichiers CSS si nécessaire -->
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
