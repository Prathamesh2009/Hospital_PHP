<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location: a_login.php");
}
include('config.php');
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT * FROM admin WHERE a_name='$user_check'");

$row=mysql_fetch_array($ses_sql);

?>