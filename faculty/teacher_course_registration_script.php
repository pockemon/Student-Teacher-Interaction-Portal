<?php
session_start();
require('../dbconfig.php');
//$course = $_SESSION['course'];
foreach ($_POST['registered'] as $registered)
    {
    foreach ($_SESSION['course'] as $course){
    $update_query = "update course_registration set status = 'Accepted' where student_id = '$registered' and course_id = '$course'";
    $update_query_result = mysqli_query($conn, $update_query) or die(mysqli_error($conn));
    }
    }

foreach ($_POST['rejected'] as $rejected)
    {
    foreach ($_SESSION['course'] as $course){
    $update_query1 = "update course_registration set status = 'Rejected' where student_id = '$rejected' and course_id = '$course'";
    $update_query1_result = mysqli_query($conn, $update_query1);
    }
    }
    header('location: faculty/index.php');
?>
