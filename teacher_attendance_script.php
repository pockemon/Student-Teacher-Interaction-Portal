<?php
session_start();
require('dbconfig.php');
foreach ($_POST[present] as $att)
{
    //echo $_GET[courseid];
    $insert_query = "insert into attendance (stud_id, course_id, status, date) values('$att', '$_GET[courseid]','Present','$_GET[date]')";
    $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
}


foreach ($_POST[absent] as $att)
{
    //echo $_GET[courseid];
    $insert_query = "insert into attendance (stud_id, course_id, status, date) values('$att', '$_GET[courseid]','Absent','$_GET[date]')";
    $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
}

header('location:tea_atte.php?message=Attendance marked successfully');
?>
