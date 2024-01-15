<head><link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto+Mono&display=swap" rel="stylesheet">
<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: login.php");
exit;
?>
