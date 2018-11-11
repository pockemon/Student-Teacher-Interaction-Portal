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

<?php


if(isset($_POST["submit"]))
{

  $error_types = array(
      1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
      'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
      'The uploaded file was only partially uploaded.',
      'No file was uploaded.',
      6 => 'Missing a temporary folder.',
      'Failed to write file to disk.',
      'A PHP extension stopped the file upload.'
  );

  // Outside a loop...
  if ($_FILES['file']['error'] == 0) {
      // here userfile is the name
      // i.e(<input type="file" name="*userfile*" size="30" id="userfile">
      echo "no error ";
  } else {
      $error_message = $error_types[$_FILES['file']['error']];
      echo $error_message;
  }

    $target_dir = "../upload_stu/";
    $file = $_FILES['file']['name'];
    //echo $_FILES['fileToUpload']['name'];
    $file1 = $_FILES['file'];
  //  print_r($file1);

		$faci = $_POST['email1'];
		$cc = $_POST['cc'];
		$semester = $users['semester'];


    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;


  //  echo $target_file;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<font color='blue' size='3px'><center>" ."Sorry, file already exists. Rename and try uploading."."</center></font>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      //  echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else
        {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file))
            {
                echo "<font color='blue' size='4px'><center>" ."The file has been uploaded."."</center></font>";

                //$insert_query = "insert into student_teacher_portal.uploads (file_address, stud_roll) values ('$target_file','$_SESSION[id]')";
                //You will first have to create a column for stud_roll in the databas, ensure that you dont create it as unique
                //You will have to update the following query with the previous one when thhe login part is done
                 $insert_query = "insert into uploads_stu (file_address, fac_id, user_id, course, semester) values ('$target_file', '$faci','$user','$cc','$semester')";
                 $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
                 header('location: upload_ass_form.php');
            } else
                {
                //    echo "<font color='blue' size='2px'><center>" ."Sorry, there was an error uploading your file."."</center></font>";
                }
        }
}
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
									<img src = "../images/<?php echo $users['email']; ?>/<?php echo $users['image']; ?>" style="width:200px;height:180px;border-radius:50%">

	                </div>

	                <ul class="nav">
	                    <li class="active">
	                        <a href="index.php">
	                            <i class="pe-7s-graph"></i>
	                            <p>Dashboard</p>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="update_profile2.php">
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
                            <a href="../stu_co_reg.php">
                               <i class="pe-7s-news-paper"></i>
                               <p> Course Registration </p>
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

	                      <a href="upload_ass_form.php">
	                          <i class="pe-7s-upload"></i>
	                          <p> Upload Assignment Submission </p>
	                      </a>

	                    </li>

	                    <li>

	                      <a href="upload_ass.php">
	                          <i class="pe-7s-look"></i>
	                          <p> View Uploaded Ass submission</p>
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


	                        <div class="col-md-12">
	                            <div class="card">
	                                <div class="header">
	                                    <h4 class="title">Upload Assignment Submission</h4>
	                                </div>
	                                <div class="content">

																		<form method="post" action="" enctype="multipart/form-data">
																			<div style="color: red "><?php

																				echo @$err;

																					?>

	                                        <div class="row">
	                                            <div class="col-md-8">
	                                                <div class="form-group">
	                                                    <label><b> Your Email </b></label>
                                                      <input type="text" class="form-control" id="inputEmail" placeholder="Your Email" name="email"  required>
	                                                </div>
	                                            </div>

																							<!--
																							<div class="col-md-4">
																								 <div class="form-group">
																										 <label><b> Your semester </b></label>
																											<input type="text" class="form-control" id="inputSem" placeholder="Your semester" name="sem" required>
																								 </div>
																						 </div>
																					 -->

                                            </div>

                                            <br>

																					<div class="row">
																							<div class="col-md-5">
																									<div class="form-group">
																											<label><b> Course Code </b></label>
																											<input type="text" class="form-control" id="inputCC" placeholder="Course Code" name="cc"  required>
																									</div>
																							</div>

																							<div class="col-md-7">
																								 <div class="form-group">
																										 <label><b> Faculty Email-id </b></label>
																											<input type="text" class="form-control" id="inputFacei" placeholder="Faculty Email-id" name="email1" required>
																								 </div>
																						 </div>

																						</div>

																						<br>

																						<div class="row">
																								<div class="col-md-8">
																										<div class="form-group">
																												<label><b> Upload File </b></label>
																												<input type="file" name="file" id="file" class="form-control">
																										</div>
																								</div>

																						</div>

																						<input type="submit" value="Upload" name="submit" class="btn btn-warning"/>
																						<input type="reset" class="btn btn-info" value="Reset"/>


																					</div>
                                   </form>
	                            </div>
	                        </div>

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
