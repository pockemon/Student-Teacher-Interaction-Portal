<?php
require './includes/common.php';
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);
$proffesion = $_POST[proffesion];
//echo $proffesion;
if($proffesion == "student"){
    //echo '1';
$select_query = "select Email_address from student where Email_address = '$email' and Password = '$password'";
$select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
}
else{
  $select_query = "select Email_address from teacher where Email_address = '$email' and Password = '$password'";
  $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
}
$total_number_of_rows = mysqli_num_rows($select_query_result);
//echo $total_number_of_rows;
if($total_number_of_rows == 0)
{
    header('location:home.php?invalid_user=Email id/Password is incorrect');
}

    else{
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $row['Email_address'];
        $_SESSION['proffesion'] = $proffesion;

       /*if(isset($_SESSION['email'])){
            //echo '1';
          header('location: forum.php');
   }
   else
   {
       //echo '0';
   }*/
        header('location:forum.php');
    }
?>
