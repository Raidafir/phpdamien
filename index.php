<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <?php include 'php/header.php'; ?>
    <?php include 'php/nav.php'; ?>

    <div id="main" class="container">
        <h2>La Mafir</h2>
        <p>La mafir est un groupe indépendant de hacker qui se bat pour la liberté.</p>
        <img src="media/image1.png" alt="Pirate" class="responsive-img">
    </div>

    <?php include 'php/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
