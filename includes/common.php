<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


session_start();

$_SESSION['id'] = 2;

//echo 'session started';
?>
