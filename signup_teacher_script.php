<?php
require './includes/common.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);
$course = mysqli_real_escape_string($conn, $_POST['course']);
$select_query = "select Email_address from teacher where Email_address = '$email'";
$select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
$total_number_of_rows = mysqli_num_rows($select_query_result);
if($total_number_of_rows > 0){
    header('location: signup_teacher.php?repeat_email=User already exists');
}
else {
    $insert_query = "insert into teacher (Name, Email_address, Address, Password, Course) values ('$name','$email','$address','$password','$course')";
    $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    $_SESSION['email'] = $email;
    $_SESSION['proffesion'] = "teacher";
    header('location: forum.php');
}
?>
