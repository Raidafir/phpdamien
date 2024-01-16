<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet"></head>
<?php 
include 'php/header.php'; 
include 'php/nav.php'; 

$mysqli = new mysqli('localhost', 'root', '', 'phpdamien');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


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


$sql2 = "SELECT bio FROM equipe WHERE id = 2"; 
$result2 = $mysqli->query($sql2);
if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $texte_bio2 = $row['bio'];
}


$sql3 = "SELECT bio FROM equipe WHERE id = 1"; 
$result3 = $mysqli->query($sql3);
if ($result3->num_rows > 0) {
    $row = $result3->fetch_assoc();
    $texte_bio3 = $row['bio'];
}

$mysqli->close();
?>
<body class="page-deux">
    
    <div class="container">
        
        <h3 class="center-align">Présentation de l'équipe</h3>
        <div class="row">
            <div class="col s12">
                <img src="media/raid.png" alt="Image 1" class="responsive-img image-bio">
                <div class="center-align bio-text texteraid"><p><?php echo htmlspecialchars($texte_bio1, ENT_QUOTES, 'UTF-8'); ?></p></div>
            </div>
        </div>
    
     
        <div class="row">
            <div class="col s6">
                <img src="media/nespo.png" alt="Image 2" class="responsive-img image-bio">
            </div>
            <div class="col s6 flex-container"> 
                <div class="bio-text"><p><?php echo htmlspecialchars($texte_bio2, ENT_QUOTES, 'UTF-8'); ?></p></div>
            </div>
        </div>
    
        
        <div class="row">
            <div class="col s6 flex-container">
                <div class="bio-text"><p><?php echo htmlspecialchars($texte_bio3, ENT_QUOTES, 'UTF-8'); ?></p></div>
            </div>
            <div class="col s6">
                <img src="media/arai.png" alt="Image 3" class="responsive-img image-bio">
            </div>
        </div>
    </div>

<?php include 'php/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
