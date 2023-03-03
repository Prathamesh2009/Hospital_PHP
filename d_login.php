<?php
session_start();

include("config.php");
if (isset($_SESSION['login_user']))
{
	header("Location:home1.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	$mycontact=$_POST['contact'];
	$password=md5($mypassword);
	$sql="SELECT d_id FROM doctor WHERE d_name='$myusername'and d_password='$password' or d_contact='$mycontact' and d_password='$password'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);

	if ($count==1)

	{
		$_SESSION['login_user']=$myusername;
		header("Location:home1.php");
	}

	else
	{
		echo"Your Login name or Password is Invalid";
	}
}
?>

<html>
<head></head>
<body background="bg.jpg">
      <form action="" method="POST">
	  <img src="Logo.jpg" width="10%" height="20%">
	  <h1><i> <u>Admin Login</u></i></h1>
	  <input type ="text" id ="username" name="username" value="" placeholder="Enter Username"></br></br>
	  OR</br></br>
	  <input type ="text" id ="contact" name="contact" value="" placeholder="Enter Contact Number"></br></br>
	  <input type ="password" id ="password" name="password" value=""  placeholder="Enter Password"></br></br>
	  
	  <input type="submit" value="Login">
	  </form>
	  
	  
	  </center>
	  </body>
	  </html>