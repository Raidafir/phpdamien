<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<?php 
include 'php/header.php'; 
include 'php/nav.php'; 

$mysqli = new mysqli('localhost', 'root', '', 'phpdamien');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Initialisation des variables pour le contenu textuel
$texte_bio1 = '';
$texte_bio2 = '';
$texte_bio3 = '';

// texte de raid dans la bdd j'ai mis dans le mauvais ordre
$sql1 = "SELECT bio FROM equipe WHERE id = 3"; 
$result1 = $mysqli->query($sql1);
if ($result1->num_rows > 0) {
    $row = $result1->fetch_assoc();
    $texte_bio1 = $row['bio'];
}

// texte nespo
$sql2 = "SELECT bio FROM equipe WHERE id = 2"; 
$result2 = $mysqli->query($sql2);
if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $texte_bio2 = $row['bio'];
}

//texte arai
$sql3 = "SELECT bio FROM equipe WHERE id = 1"; 
$result3 = $mysqli->query($sql3);
if ($result3->num_rows > 0) {
    $row = $result3->fetch_assoc();
    $texte_bio3 = $row['bio'];
}

$mysqli->close();
?>

<div class="container">
    <!-- Section pour la première image et son texte -->
    <h3 class="center-align">Présentation de l'équipe</h3>
    <div class="row">
        <div class="col s12">
            <img src="media\raid.png" alt="Image 1" class="responsive-img">
            <div class="center-align"><p><?php echo $texte_bio1; ?></p></div>
        </div>
    </div>

    <!-- Section pour la deuxième image et son texte -->
    <div class="row">
        <div class="col s6">
            <img src="media/nespo" alt="Image 2" class="responsive-img">
        </div>
        <div class="col s6">
            <div><p><?php echo $texte_bio2; ?></p></div>
        </div>
    </div>

    <!-- Section pour la troisième image et son texte -->
    <div class="row">
        <div class="col s6">
            <div><p><?php echo $texte_bio3; ?></p></div>
        </div>
        <div class="col s6">
            <img src="media/arai" alt="Image 3" class="responsive-img">
        </div>
    </div>
</div>


<?php include 'php/footer.php'; ?>

<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


