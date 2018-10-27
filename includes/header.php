<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

          <a href="#" class="navbar-brand">Student Teacher Portal</a>

        </div>

            <ul class="nav navbar-nav navbar-right">
             <?php if(!isset($_SESSION['email'])){?>
                <li><a href="signup_student.php"><span glyphicon glyphicon-user></span>Sign Up-Student</a></li>
                <li><a href="signup_teacher.php"><span glyphicon glyphicon-user></span>Sign Up-Teacher</a></li>
                <li><a href="home.php"><span glyphicon glyphicon-log-in></span>Log In</a></li>
             <?php } else {?>
                <li style="margin-top:-2px"><a href="forum.php">Forum</a></li>
                <li style="margin-top:-2px"><a href="add_question.php"><span class="glyphicon glyphicon-question-sign"></span>Add question</a></li>
                <li style="margin-top:-2px"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
             <?php }?>
            </ul>
    </div>
</nav>
