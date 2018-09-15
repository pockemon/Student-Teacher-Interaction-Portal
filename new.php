
<?php

 $temp = $_POST['name'];
 //echo $temp;
    
$temp1 = (int)$temp;
//echo $temp1;
//echo gettype($temp1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn1) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT answer, answered_by FROM answers_table
          WHERE (answers_table.Q_id = $temp1)";
     
 $result = mysqli_query($conn1, $query);

 while($row = mysqli_fetch_array($result))
 {
        $answer1 = "Answer: " . $row["answer"] . "<br>" . "Answered By: " . $row["answered_by"];
        echo $answer1;
     
       //document.getElementById("demo").innerHTML = ;

        echo "<br />";
        echo '<hr>';
 }


 
 mysqli_close($conn1);

?>