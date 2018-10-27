<?php
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../home2.php');}
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

	      .wrapper{
	        background-image: url('assets/img/image7.jpg');
	        background-size: cover;
	        background-repeat: no-repeat;

	      }

	      .panel-default
	      {
	        background-color: white;
          margin-left: 50px;
          margin-right: 50px;
          padding: 10px;
          width: 600px;
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
	                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $users['image'] ).'" style="width:200px;height:180px;border-radius:50%"/>'; ?>

	                </div>

	                <ul class="nav">
	                    <li class="active">
	                        <a href="index.php">
	                            <i class="pe-7s-graph"></i>
	                            <p>Dashboard</p>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="update_profile1.php">
	                            <i class="pe-7s-user"></i>
	                            <p>User Profile</p>
	                        </a>
	                    </li>

	                    <li>
	                          <a href="update_password1.php">
	                             <i class="pe-7s-lock"></i>
	                             <p>Update Password </p>
	                          </a>

	                    </li>

											<li>
														<a href="Forum1.php">
																<i class="pe-7s-notebook"></i>
																<p>Q-A forum </p>
														</a>

											</li>

                      <li>

                            <a href="Add_question1.php">
                                <i class="pe-7s-help1"></i>
                                <p> Ask a question  </p>
                            </a>

                      </li>

											<li>

												<a href="view.php">
														<i class="pe-7s-look"></i>
														<p> View Study Material/Assignments </p>
												</a>

											</li>

											<li>

												<a href="upload_ass.php">
														<i class="pe-7s-upload"></i>
														<p> Upload Assignment Submission </p>
												</a>

											</li>

											<li>
																<a href="give_feedback1.php">
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

	            <div class="content" >
	                <div class="container-fluid">
	                    <div class="row panel panel-default">

                        	          <form method="post" action="Add_answer.php" style="margin-top: 80px">
                        	            <div style="color: red "><?php

                        	              echo @$err;

                        	                ?>
	                        <div class="col-md-12">
	                            <div class="card">
	                                <div class="header">
	                                    <h4 class="title">Add Your Answer</h4>
	                                </div>
	                                <div class="content">

	                                        <div class="row">

	                                            <div class="col-md-6">
	                                                <div class="form-group">
	                                                    <label><b> Question Number </b></label>
                                                      <input type="text" class="form-control" id="inputQ_no" placeholder="Question number" name="qno" style="height: 50px" required>
	                                                </div>
	                                            </div>
                                            </div>



                                          <div class="row">

                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label><b> Your Answer </b></label>
                                                      <textarea class="form-control" id="mytextarea" rows="6" cols="103" name="answer" required> Your answer </textarea>
                                                  </div>
                                              </div>
                                            </div>




                                          <div class="row">

                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label><b> Your Name </b></label>
                                                      <input type="text" class="form-control" id="inputName" placeholder="Your name" name="name" style="height: 50px" required>
                                                  </div>
                                              </div>

                                          </div>

                                          <button type="submit" class="btn btn-warning">Submit</button>
                                          <input type="reset" class="btn btn-info" value="Reset"/>


	                            </div>
	                        </div>
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
