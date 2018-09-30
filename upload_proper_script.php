<?php
require './includes/common.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$_SESSION[id] = 2;
if(isset($_POST["submit"]))
{
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists. Rename and try uploading.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                echo "The file ".( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                //$insert_query = "insert into student_teacher_portal.uploads (file_address, stud_roll) values ('$target_file','$_SESSION[id]')";
                //You will first have to create a column for stud_roll in the databas, ensure that you dont create it as unique
                //You will have to update the following query with the previous one when thhe login part is done
                $insert_query = "insert into uploads (file_address, user_id) values ('$target_file', '$_SESSION[id]')";
                $insert_query_result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
                header('location: upload_proper.php?confirm=File uploaded');
            } else
                {
                    echo "Sorry, there was an error uploading your file.";
                }
        }
}
?>
