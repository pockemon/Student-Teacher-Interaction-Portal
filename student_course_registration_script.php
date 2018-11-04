<?php
session_start();
require ('dbconfig.php');
foreach ($_POST[courses] as $course)
{
    //echo $course;
    $select_query = "select course_name, id, name from faculty where course_code='$course'";
    $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($select_query_result))
    { //       echo $_SESSION['id'];
        $insert_query = "insert into course_registration(student_id, course_id, course_name, teacher_id, teacher_name, status) values ('$_SESSION[id]', '$course', '$row[course_name]', '$row[id]', '$row[name]', 'Pending')";
        $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    }
}
header('location: user/index.php');
//echo $_SESSION['id'];

?>
