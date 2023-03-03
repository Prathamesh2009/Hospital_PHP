<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $a=$_POST['name'];
 $b=$_POST['age'];
 $c=$_POST['gender'];
 $d=$_POST['contact'];
 $e=$_POST['address'];
 $f=$_POST['email'];
 $g=$_POST['password'];
 

 $qry=mysql_query("UPDATE custmoer SET age ='$b', gender ='$c' ,contact = '$d', address = '$e' , email = '$f' , password = '$g' WHERE name ='$a' ");
 
 if($qry == true)
 {
 echo "<center>" . "Update" . "</center>";
 header("location:c_login.php");
 }
 
 else
 {
 echo"not".mysql_error();
 }
}
else
{
echo "not post";
}
?>