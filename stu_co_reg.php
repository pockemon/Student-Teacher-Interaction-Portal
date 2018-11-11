<?php
session_start();
include('dbconfig.php');

$user= $_SESSION['user'];
if($user=="")
{header('location: home2.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>STIP</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <style>

        .show
        {
          background-color: grey;
          color: white;
          font-family: Raleway;
          font-size:  18px;
        }
        /*
        .hover1:hover{
          background-color: black;
           color: white;
        }
        */


        .hover2:hover{
          background-color:  #ffb3d9;
           color: white;
        }

      .wrapper{
        background-image: url('assets/img/image7.jpg');
        background-size: cover;
        background-repeat: no-repeat;

      }

      .panel-default
      {
        background-color: white;
        margin-left: 7px;
        margin-right: 7px;
        padding: 8px 8px;

      }

    </style>

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Hello <?php echo $users['name'];?>
                </a>
                <img src = "images/<?php echo $users['email']; ?>/<?php echo $users['image']; ?>" style="width:200px;height:180px;border-radius:50%">

                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="user/index.php">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="user/update_profile2.php">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>

                    <li>
                          <a href="user/update_password1.php">
                             <i class="pe-7s-lock"></i>
                             <p>Update Password </p>
                          </a>

                    </li>

                    <li>
                          <a href="stu_co_reg.php">
                             <i class="pe-7s-news-paper"></i>
                             <p> Course Registration </p>
                          </a>

                    </li>

                    <li>
                          <a href="user/Forum1.php">
                              <i class="pe-7s-notebook"></i>
                              <p>Q-A forum </p>
                          </a>

                    </li>

                    <li>

                          <a href="user/Add_question1.php">
                              <i class="pe-7s-help1"></i>
                              <p> Ask a question  </p>
                          </a>

                    </li>

                    <li>

                      <a href="user/view.php">
                          <i class="pe-7s-look"></i>
                          <p> View Study Material/Assignments </p>
                      </a>

                    </li>

                    <li>

                      <a href="user/upload_ass_form.php">
                          <i class="pe-7s-upload"></i>
                          <p> Upload Assignment Submission </p>
                      </a>

                    </li>

                    <li>

                      <a href="user/upload_ass.php">
                          <i class="pe-7s-look"></i>
                          <p> View Uploaded Ass submission</p>
                      </a>

                    </li>

                    <li>
                              <a href="user/give_feedback1.php">
                                 <i class="pe-7s-like2"></i>
                                 <p>Feedback</p>
                               </a>

                    </li>


                </ul>
            </div>
        </div>

        <div class="main-panel">
          <nav class="navbar navbar-inverse navbar-fixed">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                      <a class="navbar-brand" href="#">Dashboard</a>
                  </div>
                  <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navbar-left">
                          <li>
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-dashboard"></i>
                                  <p class="hidden-lg hidden-md">Dashboard</p>
                              </a>
                          </li>


                      </ul>

                      <ul class="nav navbar-nav navbar-right">

                          <li>
                              <a href="logout.php">
                                  <p>Log out</p>
                              </a>
                          </li>
                          <li class="separator hidden-lg"></li>
                      </ul>
                  </div>
              </div>
          </nav>


            <div class="content" style="color: black">
                <div class="container-fluid">
                    <div class="row panel panel-default">
                        <div class="col-md-12">
                            <div class="card">

                                        <div class="col-md-12">


                                                <div class="form-group">

                                                  <?php
                                                      $select_query = "select course_code, course_name from faculty where semester='$_SESSION[semester]'";
                                                      $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));

                                                      ?>
                                                  <h4 style="margin-left: 25%; color:black" class="center">Choose the course of your choice:</h4>
                                                  <form method="post" action="student_course_registration_script.php" class="col-xs-6" style="margin-left: 25%; margin-right: 25%; border:1px solid black; padding: 10px">
                                                      <ul>
                                                      <?php
                                                      while($row = mysqli_fetch_array($select_query_result))
                                                      {
                                                          $select_query1 = "select status from course_registration where student_id = '$_SESSION[id]' and course_id = '$row[course_code]'";
                                                          $select_query1_result = mysqli_query($conn, $select_query1) or die(mysqli_error($conn));
                                                          $row1 = mysqli_fetch_array($select_query1_result);
                                                          ?>
                                                          <?php if(isset($row1['status'])){
                                                              if($row1['status'] == Accepted){
                                                          ?>
                                                          <br>
                                                          <li style="color: black; background-color: lightgreen; font-size: 16px; margin-left: 10px; margin-right: 10px; border-radius: 25px">
                                                          <?= $row['course_code']." ".$row['course_name']?>
                                                          <!--<input type="checkbox" name="courses[]" value="<?php echo $row['course_id'];?>">-->
                                                          </li>
                                                      <?php }
                                                               elseif ($row1['status'] == Pending) {?>
                                                                  <br>
                                                                  <li style="color: black; background-color: gold; font-size: 16px; margin-left: 10px; margin-right: 10px; border-radius: 25px">
                                                                  <?=$row['course_code']." ".$row['course_name']?>
                                                              <!--<input type="checkbox" name="courses[]" value="<?php echo $row['course_id'];?>">-->
                                                                  </li>
                                                                      <?php }
                                                               elseif ($row1['status'] == Rejected) {?>
                                                                  <br>
                                                                  <li style="color: black; background-color: lightcoral; font-size: 16px; margin-left: 10px; margin-right: 10px; border-radius: 25px">
                                                                  <?=$row['course_code']." ".$row['course_name']?>
                                                              <!--<input type="checkbox" name="courses[]" value="<?php echo $row['course_id'];?>">-->
                                                      </li>
                                                               <?php
                                                               }
                                                          }
                                                          else {?>
                                                                  <br>
                                                                  <li style="color: black; font-size: 16px">
                                                                  <?=$row['course_code']." ".$row['course_name']?>
                                                                      <input type="checkbox" style="margin-left: 20px; margin-right: 10px; width: 30px; height: 16px; border-radius: 25px" name="courses[]" value="<?php echo $row['course_code'];?>">
                                                                  </li>
                                                          <?php }
                                                      }?>
                                                      </ul>
                                                      <input type="submit" class="btn btn-primary center-block" style="">
                                                      </form>
                                                </div>
                                        </div>

            </div>
          </div>
        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>
