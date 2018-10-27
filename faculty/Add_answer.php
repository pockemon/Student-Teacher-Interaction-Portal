     <?php

               session_start();
               include('../dbconfig.php');

                $q_no = $_POST["qno"];

                $answer = $_POST["answer"];

                $name = $_POST["name"];

                $sql = "INSERT INTO answers_table (Q_id, answer, answered_by)
                VALUES ('$q_no', '$answer', '$name')";

                $sql_result = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

                mysqli_close($conn);

               header("Location: Forum1.php");

    ?>
