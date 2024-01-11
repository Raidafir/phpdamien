<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Raid</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>
<body>
<header>
    <h1><a href="index.php" class="header-link">Raid Industries</a></h1>
    <div id="login-icon">
        <?php
       if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
        // Vérifier si l'utilisateur est connecté
        if (isset($_SESSION['user_id'])) {
            // Afficher la photo de profil
            echo '<img src="' . htmlspecialchars($_SESSION['profile_picture']) . '" alt="Profil" style="width:50px; height:50px;">'; // Assurez-vous que le chemin est correct
            // Ajouter un lien de déconnexion
            echo '<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>';
        } else {
            // Afficher les options de connexion et d'inscription
            echo '<a href="login.php"><i class="fas fa-sign-in-alt"></i> Connexion</a>';
            echo '<a href="register.php"><i class="fas fa-user-plus"></i> Créer un compte</a>';
        }
        ?>
    </div>
</header>
<!-- Reste du contenu de votre page -->
</body>
</html>
