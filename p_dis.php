<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == 'POST')
{
	$name = $_POST['name'];
	$discharge = $_POST['discharge'];
	$doddate = $_POST['DOD'];
	$qry = mysql_query("UPDATE hospital.patient SET  p_discharge = '$discharge' , DOD = '$doddate'
	WHERE patient.p_name = '$name'");
	
	if($qry == true)
	{
		header("location:home.php");
	}
	else
	{
		echo"not".mysql_error();
	}
}
else
{
	echo "not POST";
}
?>
