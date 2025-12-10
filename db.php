<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$host = "localhost";
$user = "root";
$pass = "";
$db   = "jym_management"; 

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
