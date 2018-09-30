     <?php

                //echo('hey');

                require './includes/common.php';

                /*
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "questions";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                */

                $q_no = $_POST["qno"];
                //$q_no1 = (int)$q_no;
               // echo(gettype($q_no1));
               // echo "<br>";
                //echo($q_no1);
                //echo "<br>";
                $answer = $_POST["answer"];
               //  echo(gettype($answer));
                //echo($answer);
                //echo "<br>";
                $name = $_POST["name"];
               // echo(gettype($name));
                //echo($name);

              // echo "<br>";

                $sql = "INSERT INTO  answers_table (Q_id, answer, answered_by)
                VALUES ('$q_no', '$answer', '$name')";

                $sql_result = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

                mysqli_close($conn);

               header("Location: forum.php");

           ?>
