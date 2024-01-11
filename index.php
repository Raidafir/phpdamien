<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>

<div id="main">
    <h2>La Mafir</h2>
    <p>La mafir est un groupe indépendant de hacker qui se bat pour la liberter.</p>
    <img src="media/image1.png" alt="Pirate">
</div>

<?php include 'php/footer.php'; ?>
