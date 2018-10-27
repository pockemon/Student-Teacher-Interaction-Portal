<!DOCTYPE html>
<?php
require './includes/common.php';
if(isset($_SESSION['email'])){
     //echo $_SESSION['email'];
    header('location: forum.php');
}
?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Signup Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style_signup_stu.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>


</head>

<body>

  <?php require './includes/header.php';?>

  <div class="signup-form">
  <div class="main-div">
    <div class="panel panel-default" style="padding-top: 30px;padding-left:20px;padding-right:20px;padding-bottom:30px">
     <h2 style="margin-top: 30px; margin-bottom: 30px; text-align: center">Student Signup</h2>
     <form id="signup" method="post" action="signup_student_script.php">
         <div style="color: red "><?php
         if(isset($_GET['repeat_email']))
         {
           echo $_GET['repeat_email'];
         }
             ?>
         </div>
        <div class="form-group">
            <input type="Name" class="form-control" id="inputName" placeholder="Name" name="name" required>
        </div>

         <div class="form-group">
             <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email" required>
          </div>

          <div class="form-group">
              <input type="Address" class="form-control" id="inputAddress" placeholder="Address" name="address" required>
          </div>

          <div class="form-group">
              <input type="Semester" class="form-control" id="inputSemester" placeholder="Semester" name="semester" required>
          </div>

          <div class="form-group">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
          </div>

          <button type="submit" class="btn btn-primary">Signup</button>



      </form>
      </div>

  </div>
  </div>


</body>
</html>
