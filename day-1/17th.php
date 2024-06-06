<?php
// $_GET example
$name = $_GET['name'];

// $_POST example
$username = $_POST['username'];

// $_SESSION example
session_start();
$_SESSION['user'] = "John";

// $_SERVER example
echo $_SERVER['PHP_SELF']; // Outputs: /example.php
?>
