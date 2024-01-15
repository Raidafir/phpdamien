<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include 'php/header.php'; ?>
<?php include 'php/nav.php'; ?>
<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'phpdamien';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if($check !== false) {
            echo "Le fichier est une image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Le fichier n'est pas une image.";
            $uploadOk = 0;
        }
    }


    if (file_exists($target_file)) {
        echo "Désolé, le fichier existe déjà.";
        $uploadOk = 0;
    }

    
    if ($_FILES["profile_picture"]["size"] > 500000) {
        echo "Désolé, votre fichier est trop volumineux.";
        $uploadOk = 0;
    }

  
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
        $uploadOk = 0;
    }

   
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.";
   
    } else {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            echo "Le fichier ". htmlspecialchars( basename( $_FILES["profile_picture"]["name"])). " a été téléchargé.";
        } else {
            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
        }
    }

    
    if ($uploadOk == 1) {
        $sql = "INSERT INTO login (users, password, profile_picture) VALUES ('$username', '$hashed_password', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Nouvel enregistrement créé avec succès";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
