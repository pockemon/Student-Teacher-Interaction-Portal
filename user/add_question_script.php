<?php
session_start();
include('../dbconfig.php');

$var1 = $_SESSION["id"];

//echo($_POST["question"]);

$var2 = $_POST["question"];

//echo($var2);

$insert_query = "insert into question_table (Question, User_id) values ('$var2', '$var1')";
$insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

header('location: Forum1.php');


?>
