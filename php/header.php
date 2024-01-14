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
    
            <a href="index.php" class="brand-logo">Raid Industries</a>
    
            <div id="login-icon">
                <?php
                 if (isset($_SESSION['user_id'])) {
                    // Afficher la photo de profil
                    echo '<img src="' . htmlspecialchars($_SESSION['profile_picture']) . '" alt="Profil" style="width:50px; height:50px;">'; // Assurez-vous que le chemin est correct
                    // Ajouter un lien de déconnexion
                    echo '<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>';
                } else {
                    // Afficher les options de connexion et d'inscription
                    echo '<a href=login.php><i class="fas fa-sign-in-alt"></i> Connexion</a>';
                    echo '<a href=register.php><i class="fas fa-user-plus"></i> Créer un compte</a>';
                }
                ?>
            </div>
        </div>
    </nav>
</header>
</body>
</html>
