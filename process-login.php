<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php 
include 'php/header.php'; 
include 'php/nav.php';


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdamien";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$nomUtilisateur = mysqli_real_escape_string($conn, $_POST['username']);
$motDePasse = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT id, password, profile_picture, Premium FROM login WHERE users = '$nomUtilisateur'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    if (password_verify($motDePasse, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['profile_picture'] = $row['profile_picture'];
        $_SESSION['Premium'] = $row['Premium']; 
        header("Location: index.php");
        exit();
    }else {
        echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
} else {
    echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
}

$conn->close();
?>
