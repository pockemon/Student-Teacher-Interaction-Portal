<?php
session_start();
include('../dbconfig.php');
error_reporting(0);

if(!isset($_SESSION['admin']))
{header('location:../home2.php');}
if(isset($update_password))
{

	$que=mysqli_query($conn,"select pass from admin");
	$row=mysqli_fetch_array($que);
    $pass=$row['pass'];
	if($op!=$pass)
		{
		$err="<font color='blue' size='5px'><center>You Enterd wrong old password</center></font>";
		}

	elseif($np!=$cp)
		{
		$err="<font color='blue' size='5px'><center>New Password and confirm password must be same</center></font>";
		}
	else
	{
		mysqli_query($conn,"update admin set pass='$cp'");
		$err="<font color='blue' size='5px'><center>Password have been Changed successfully !!</center></font>";
	}

}

?>
<form method="post">
<table border="0" bgcolor="#99FFCC" style="margin:30px;">
<tr>
	 <th><?php echo @$err; ?></th>
</tr>

<tr>
	<th height="87">Old Password:
    <input type="password" name="op" value="" placeholder="enter your old password" class="form-control" required/></th>
</tr>

<tr>
	<th height="93">New Password:
    <input type="password" name="np" value="" placeholder="enter your new password" class="form-control"  required/><br /></th>
</tr>

<tr>
	<th height="87">Confirm Password:
    <input type="password" name="cp" value=""  placeholder="re-enter your new password" class="form-control" required/><br /></th>
</tr>
<tr>
	<th rowspan="2"><input type="submit" value="Update Password" name="update_password" class="btn btn-success"/></th>
</tr>
</table>
</form>
