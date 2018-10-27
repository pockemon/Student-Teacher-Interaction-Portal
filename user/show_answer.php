
<?php
session_start();
include('../dbconfig.php');

$temp = $_POST['name'];

$temp1 = (int)$temp;

echo '<br>';

$query = "SELECT answer, answered_by FROM answers_table
          WHERE (answers_table.Q_id = $temp1)";

 $result = mysqli_query($conn, $query);

 while($row = mysqli_fetch_array($result))
 {
        $answer1 = "<b> Answer: </b><br>" . wordwrap($row["answer"],150,"<br>\n",TRUE) . "<br><br>" . "<b> Answered By: </b>" . $row["answered_by"];
        echo "<h4 style='color:black; font-size:20px; font-family:Raleway;'>". $answer1 . "</h4>";

        echo "<br />";
        echo '<hr>';
 }

?>
