<?php
require './includes/common.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$semester = mysqli_real_escape_string($conn,$_POST['semester']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);
$select_query = "select Email_address from student where Email_address = '$email'";
$select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
$total_number_of_rows = mysqli_num_rows($select_query_result);
if($total_number_of_rows > 0){
    header('location: signup_student.php?repeat_email=User already exists');
}
else {
    $insert_query = "insert into student (Name, Email_address, Address, Semester, Password) values ('$name','$email','$address','$semester','$password')";
    $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    $_SESSION['email'] = $email;
    $_SESSION['proffesion'] = "student";
    header('location: forum.php');
}
?>
