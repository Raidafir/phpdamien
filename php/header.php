<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Raid</title>
    <!-- Lien vers le fichier CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Votre fichier CSS personnalisé -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
<nav class="nav-wrapper">
        <div class="container">
            <a href="index.php" class="brand-logo">Mafir Corporations</a>
        </div>
    </nav>

    <div class="login-register-container">
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<img src="' . htmlspecialchars($_SESSION['profile_picture']) . '" alt="Profil" class="circle responsive-img" style="width:50px; height:50px;">';
            echo '<a href="logout.php">Déconnexion</a>';
        } else {
            echo '<a href="login.php">Connexion</a>';
            echo '<a href="register.php">Créer un compte</a>';
        }
        ?>
    </div>
</header>
</body>
</html>
