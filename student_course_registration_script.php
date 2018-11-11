<?php
session_start();
include('dbconfig.php');

$user= $_SESSION['user'];
if($user=="")
{header('location: home2.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
$name = $users['name'];


foreach ($_POST[courses] as $course)
{
    //echo $course;
    $select_query = "select course_name, id, name from faculty where course_code='$course'";
    $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($select_query_result))
    { //       echo $_SESSION['id'];
        $insert_query = "insert into course_registration(student_id, name, course_id, course_name, teacher_id, teacher_name, status) values ('$_SESSION[id]', '$name','$course', '$row[course_name]', '$row[id]', '$row[name]', 'Pending')";
        $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));

    }
}
header('location: user/index.php');
//echo $_SESSION['id'];

?>
