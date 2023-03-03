<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $a=$_POST['name'];
 $b=$_POST['age'];
 $c=$_POST['gender'];
 $d=$_POST['contact'];
 $e=$_POST['address'];
 $f=$_POST['email'];
 $g=$_POST['DOJ'];
 $h=$_POST['doctor'];
 $i=$_POST['disease'];
 $j=$_POST['room_no'];
 $k=$_POST['discharge'];
 
 
 $qry= mysql_query("INSERT INTO patient(p_name, p_age, p_gender, p_contact , p_address, p_email, DOJ , d_name, p_disease , p_roomno , p_discharge)
 VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h' , '$i' , '$j','$k' )");
 if($qry==true)
 {
   echo"<center>"."INSERTED"."</center>";
   header("location:home.php");
 }
 else
 {
   echo"NOT_INSERTED".mysql_error();
 }
 }
 else
 {
   echo"Request method is nost POST";
 }
 ?>