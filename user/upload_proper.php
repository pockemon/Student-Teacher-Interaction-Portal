<?php
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../home2.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="upload_proper.css" type="text/css">
    </head>
    <body>

        <div style="margin-top: 100px; margin-left: 150px;" class="col-xs-4">
            <form action="upload_proper_script.php" method="post" enctype="multipart/form-data">
                <div style="background-color: forestgreen; color: #000; text-align: center">
                  <?php
                  if(isset( $_GET['confirm']))
                  {
                    echo $_GET['confirm'];
                  }
                      ?>
                </div>
                <label style="font-size: 20px">Upload assignment:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                <br>
                <input type="submit" value="Upload" name="submit" class="btn btn-primary"
                       style="margin-left: 150px">
            </form>


            <p style="font-size: 20px; font-weight: bolder; margin-top: 30px"> Uploaded assignments: </p><br>
            <p style="font-size: 18px; font-weight: bold">Assignment name </p><br>

            <?php
        $dir = "uploads";
                if (is_dir($dir)){
                    if($dh = opendir($dir)){
                        $count = 1;
                        $select_query = "select file_address from uploads where user_id = '$_SESSION[user]' ";
                        $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($select_query_result)){
                            $basename = basename($row['file_address']);
                            if($basename!='.' && $basename!='..'){
                                echo $count.'. ';
                                echo "<a href='$row[file_address]' download>$basename</a><br><br>";
                                $count = $count +1;
                             }
                        }
                        closedir($dh);
                    }
                }
 else {
     echo "Not a directory";
 }
        ?>
        </div>
    </body>
</html>
