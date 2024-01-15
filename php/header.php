<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Raid</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
             echo '<div class="profile-container">';
            echo '<img src="' . htmlspecialchars($_SESSION['profile_picture']) . '" alt="Profil" class="circle responsive-img" style="width:50px; height:50px; cursor: pointer;">';
            echo '<div class="logout-link" style="display: none;">';
            echo '<a href="logout.php">Se déconnecter</a>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<a href="login.php">Connexion</a>';
            echo '<a href="register.php">Créer un compte</a>';
        }
        ?>
    </div>
</header>
<script>
    document.querySelector('.profile-container img').onclick = function() {
        var logoutLink = document.querySelector('.logout-link');
        logoutLink.style.display = logoutLink.style.display === 'none' ? 'block' : 'none';
    };
</script>
</body>
</html>
