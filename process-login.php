<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php 
include 'php/header.php'; 
include 'php/nav.php';

// Démarrage de la session en haut du fichier
session_start();

// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdamien";

// Création de la connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Nettoyage des données d'entrée pour éviter les injections SQL
$nomUtilisateur = mysqli_real_escape_string($conn, $_POST['username']);
$motDePasse = mysqli_real_escape_string($conn, $_POST['password']);

// Requête pour récupérer les informations de l'utilisateur
$sql = "SELECT id, password, profile_picture, Premium FROM login WHERE users = '$nomUtilisateur'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Vérification du mot de passe
    $row = $result->fetch_assoc();
    if (password_verify($motDePasse, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['profile_picture'] = $row['profile_picture'];
        $_SESSION['Premium'] = $row['Premium']; // Stockez l'état premium
        // Redirection vers la page d'accueil ou la page du tableau de bord de l'utilisateur
        header("Location: index.php");
        exit();
    }else {
        // Le mot de passe est incorrect
        echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
} else {
    // Aucun utilisateur trouvé avec ce nom d'utilisateur
    echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
}

// Fermeture de la connexion
$conn->close();
?>
