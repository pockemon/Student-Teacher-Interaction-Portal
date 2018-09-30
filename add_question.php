<!DOCTYPE html>

<html>
    <head>
        <title>Add a question</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div>
            <?php require './includes/header.php';?>
        </div>

        <div style="margin-left: 200px; margin-top: 100px; margin-right: 100px;">
                <form method="post" action="add_question_script.php">
                    <div class="col-xs-11">
                        <div class="form-group center-block" style="font-size: 20px">
                            <p class="text-center" style="font-size: 40px"><b>Ask your question?</b></p><br>
                            <label>Title</label>
                            <input type="text" class="form-control" name="question_title">
                            <br>
                            <label>Question:</label>
                          <!--  <input type="text" class="form-control" id="mytextarea" rows="3" cols="73" name="question"> -->
                            <textarea class="form-control" id="mytextarea" rows="3" cols="73" name="question"> </textarea>
                            <input style="margin-top: 20px; margin-left: 350px;"type="submit" value="Ask" class="btn btn-primary">
                        </div>
                    </div>
                </form>
        </div>
    </body>
</html>
