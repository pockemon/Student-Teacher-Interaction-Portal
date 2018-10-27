<!DOCTYPE html>

<html>
    <head>
        <title>Add a question</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style_add_question.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>

      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">Student-Teacher Portal</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li style="margin-top: -2px"><a href="forum.php"><span class="glyphicon glyphicon-arrow-left"></span> Back to forum</a></li>
        </ul>
      </div>
    </nav>
        <!--
        <div style="margin-left: 200px; margin-top: 100px; margin-right: 100px;">
                <form method="post" action="add_question_script.php">
                    <div class="col-xs-11">
                        <div class="form-group center-block" style="font-size: 20px">
                            <p class="text-center" style="font-size: 40px"><b>Ask your question?</b></p><br>
                            <label>Title</label>
                            <input type="text" class="form-control" name="question_title">
                            <br>
                            <label>Question:</label>
                            <input type="text" class="form-control" id="mytextarea" rows="3" cols="73" name="question">
                            <textarea class="form-control" id="mytextarea" rows="3" cols="73" name="question"> </textarea>
                            <input style="margin-top: 20px; margin-left: 350px;"type="submit" value="Ask" class="btn btn-primary">
                        </div>
                    </div>
                </form>
        </div>
      -->
        <div class="login-form">
        <div class="main-div">
            <div class="panel panel-default" style="padding-top: 30px;padding-left:20px;padding-right:20px;padding-bottom:30px">
           <h2 style="margin-bottom: 50px">Ask your question</h2>
            <form id="Login" method="post" action="add_question_script.php">

                <div class="form-group">
                    <input type="text" class="form-control" id="inputTitle" placeholder="Title of Question" name="question_title"  style="height: 50px" required>
                </div>

                <div class="form-group">

                    <textarea class="form-control" id="mytextarea" rows="3" cols="73" name="question" required> Your Question </textarea>
                    <!-- <input type="text" class="form-control" id="inputQuestion" rows="3" cols="73" placeholder="Question" name="question" style="height: 70px" required>-->

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>

        </div>
        </div>

    </body>
</html>
