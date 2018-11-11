<?php
session_start();
 require('dbconfig.php'); 
if(isset($_SESSION['user']){
header('location: user/index.php');
}
else if(isset($_SESSION['faculty_login']))
   {
	   header('location: faculty/index.php');
   }
   
else if(isset($_SESSION['admin']))
   {
	   header('location: admin');
   }
?>

<!DOCTYPE HTML>

<html>
	<head>
    <link rel="icon" type="image/png" href="images/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>STIP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

			<header id="header" class="alt">
				<div class="logo"><a href="home2.php">Welcome to <span> Student-Teacher Interaction Portal</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">

				<ul class="links">

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="home2.php"><i class="fa fa-home fa-fw"></i>Home</a>
          </li>

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="About1.php"><i class="fa fa-home fa-fw"></i>About</a>
          </li>

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="Registration1.php"><i class="fa fa-home fa-fw"></i>Registration</a>
          </li>

          <li class="dropdown">
                <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
                <span class="caret"></span></a>
                <ul class="dropdown-menu">

                   <li><a href="Login1.php">Student</a></li>
                   <li><a href="Faculty_login1.php">Faculty</a></li>
                    <li><a href="admin_login.php">Admin</a></li>
               </ul>
           </li>


				 </ul>
			</nav>


		<!-- Banner -->
    <section class="banner full">
				<article>
					<img src="images/image2.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Welcome To</p>
							<h2 style="font-size: 90px">Student Teacher Interaction Portal</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/bg1.jpeg" alt="" />
					<div class="inner">
            <header>
              <p>Creating</p>
              <h2 style="font-size: 90px">An online way for interaction</h2>
            </header>

					</div>
				</article>
				<article>
					<img src="images/image4.jpg"  alt="" />
					<div class="inner">
            <header>
              <p>Our moto</p>
              <h2 style="font-size: 90px">We bring changes</h2>
            </header>
					</div>
				</article>

			</section>


	
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>



	</body>
</html>
