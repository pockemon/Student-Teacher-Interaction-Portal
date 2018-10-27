<!DOCTYPE html>

<?php require './includes/common.php';
if(isset($_SESSION['email'])){
    header('location: forum.php');
}?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Teacher Signup Page</title>
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
     <h2 style="margin-bottom: 30px; margin-top: 30px; text-align: center">Teacher Signup</h2>
     <form id="signup" method="post" action="signup_teacher_script.php">
          <div style="color: red "><?php          if(isset($_GET['repeat_email']))
                   {
                     echo $_GET['repeat_email'];
                   }
                   ?>
                   </div>
        <div class="form-group">
            <input type="Name" class="form-control" id="inputName" placeholder="Name" name="name" required>
        </div>

          <div class="form-group">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
          </div>

          <div class="form-group">
              <input type="Address" name="address" class="form-control" id="inputAddress" placeholder="Address" required>
          </div>

          <div class="form-group">
              <input name="password" type="Password" class="form-control" id="inputPassword" placeholder="Password" required>
          </div>

          <div class="form-group">
               <select name="course" class="form-control" id="inputCourse" placeholder="Courses" required>
                 <option value="CO300">CO300- Computer networks</option>
                 <option value="CO301">CO301- Database management systems</option>
                 <option value="HU300">HU300- Engineering Economics</option>
                 <option value="CO316">CO316- Computer architecture lab</option>
               </select>



          </div>

          <button type="submit" class="btn btn-primary">Signup</button>



      </form>
      </div>

  </div>
  </div>
</body>
</html>
