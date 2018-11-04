<?php
session_start();
require('../dbconfig.php');
if(!isset($_SESSION['faculty_login'])){
    header('location: home2.php');
}
?>

<html>
    <head>
        <title>Course Registration</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style_signup_stu.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    </head>

    <body>
      <!--  <?php require './includes/header.php';
        //echo $_SESSION['course'];
        ?>-->
        <div style="margin-top: 100px">
            <h4 style="margin-left: 25%" class="center">List of students pending approval:</h4>
            <form method="post" action="teacher_course_registration_script.php" class="col-xs-6" style="margin-left: 25%; border: black solid ">
            <table style="width: 100%; border-spacing: 50px;">
                <tr>
                    <th> Student Id     </th>
                    <th> Student Name </th>
                    <th> Subject </th>
                    <th> Approve/Disapprove </th>
                </tr>
        <?php
        foreach($_SESSION['course'] as $course)
        {
    //echo $course;
            $select_query = "select id, name from user where id in (select student_id from course_registration where course_id = '$course' and status = 'Pending')";
            $select_query_result = mysqli_query($conn, $select_query);

    ?>
            <?php
            while($row = mysqli_fetch_array($select_query_result))
            {
        ?>
            <tr style="font-size: 16px">
                <td> <?=$row['id']?> </td>
                <td> <?=$row['name']?> </td>
                <td>
                <?php
                $select_query1 = "select course_name from faculty where course_code = '$course'";
                $select_query1_result = mysqli_query($conn, $select_query1) or die(mysqli_error($conn));
                $row1 = mysqli_fetch_array($select_query1_result);
                echo $row1['course_name'];?>
                </td>
                <td>
                    <input type="checkbox" name="registered[]" value="<?php echo $row['id'];?>" style="margin-left: 10px; margin-right: 10px; width: 30px; height: 16px; border-radius: 25px">Approve
                    <input type="checkbox" name="rejected[]" value="<?php echo $row['id'];?>" style="margin-left: 10px; margin-right: 10px; width: 30px; height: 16px; border-radius: 25px">Disapprove
                </td>
            </tr>
        <?php
            }
        }
        ?>  </table>
            <br>
            <input type="submit" class="btn btn-primary center-block">
        </form>
        </div>
    </body>
</html>
