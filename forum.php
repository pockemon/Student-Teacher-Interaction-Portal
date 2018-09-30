

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Question-Answer Forum</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li style="margin-top:5px">Add Question </li>
      <li style="margin-top:2px"><a href="#"> User Profile </a></li>
    </ul>
  </div>
</nav>


 <div class="container-fluid">

    <div class="col-lg-3" style="background-color:lavender; margin-top:5px;">


                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "questions";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }

                //echo(gettype($conn));

                $sql = "SELECT Q_id,Question,User_id FROM question_table";

                $result = mysqli_query($conn, $sql);

                //echo(gettype($sql));
                //echo(gettype($result));

                if (mysqli_num_rows($result) > 0)
                 {
                      // output data of each row
                      echo '<ul>';

                           while($row = mysqli_fetch_assoc($result))
                            {
                            //echo  "id: " . $row["Q_id"]. "Question: " . $row["question"]. "Questioned By: " . $row["Asked_by"];

                           // $answer =  "Question: " . $row["question"]. "<br>" . "Questioned By: " . $row["Asked_by"] . "<br>";
                               //echo $row["question"];
                               $var1 = $row["Question"];
                               //echo $var1;
                               //echo gettype($var1);
                               $var2 = $row["User_id"];
                               $answer = array($var1,$var2);
                               //echo $answer[0];
                              // echo '<br>';
                               $var3 = $answer[0];
                               $var4 = $answer[1];
                                //echo $var3;

                               $var = $row["Q_id"];
                               #echo $var;
                               $inta = (int)$var;
                               #echo(gettype($inta));
                              // echo $inta;
                               // $mov_str = implode(",", $answer);

                               //<input type="button" data-id="<?=$row['ID']>" onclick="myFunc(this)">
                             echo '<li>'.'<button onclick= foo("' . $inta. '");>'. $var3 .'</button> '.'</li>';
                             /*
                             echo '<li>'.'<button id=(int)$var
                             onclick="foo(this.id)">'.$var3.'</input>'.'</li>';
                             */echo '<hr>';


                            }

                       echo '</ul>';

                 }
                  else
                  {
                        echo "0 results";
                  }

                  ?>






    </div>
    <div class="col-lg-9" style="background-color:lavenderblush;margin-top:5px;">

      <div id="demo"></div>

            <div class="center hideform">
                <button id="close" style="float: right;">X</button>
                <form action="answer.php" method="post">
                    Your Answer:<br>
                    <input type="text" name="answer">
                    <br>
                    Your name:<br>
                    <input type="text" name="name">
                    <br>
                    Question-number:<br>
                    <input type="number" name="qno">

                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
       <button  style="text-align: right" id="show">Add Your answer</button>
</div>
</div>

<script type="text/javascript">


       function foo(btnid)
       {

                $.ajax({
                  url: "new.php",
                  type: "POST",
                  data: { "name": btnid },
                  success: function(result) {

                          document.getElementById("demo").innerHTML = result;
                    }
                 });

      }

            $('#show').on('click', function ()
            {
            $('.center').show();
            $(this).hide();
            })

            $('#close').on('click', function ()
            {
                $('.center').hide();
                $('#show').show();
            })
</script>

</body>

</html>
