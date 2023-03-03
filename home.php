<?php
include"a_lock.php";
?>
<html>
<head>
<button><a href="a_logout.php">Logout</a></button></br></br>
<style>
table
{
	border-style:solid;
	border-width:5px;
	border-color:red;
}
</style>
</head>
<center>
<h1><i><u>Patient's Information</u></i></h1></br></br>
</center>
<form action="" method= "POST">
Search By Patient Value: 
<input type="text" name="searchname"></br></br>
<input type="submit" name="search">
<button><a href="p_form.php">Add New Patient</a></button>
<button><a href="p_discharged.php">Edit if Discharged</a></button>
<button onclick = "window.print()">Print</button>
</form>
</html>
<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$search= $_POST["searchname"];
	$qry = mysql_query("SELECT * FROM patient WHERE 
	p_name LIKE '%$search%' OR p_contact LIKE '%$search%' OR p_age LIKE '%$search%' OR p_gender LIKE '%$search%' OR d_name LIKE '%$search%'");
	 
	 echo "<table border='1'>
		<tr>
		<th>Patient's ID </th>
       
		<th>Patient's Name </th>
		
		<th>Patient's Age </th>
		
		<th>Patient's Contact No. </th>
		
		<th>Patient's Address  </th>
		
		<th>Patient's email </th>
		
		<th>Patient's Date of Joining </th>
		
		<th>Doctor Appointed  </th>
		
		<th>Disease  </th>
		
		<th>Room Allotted  </th>
		
		<th>Patient Discharged or Not </th>
		
		<th>Patient Date of Discharged  </th>
		
		
		</tr>";
		
		
	while($row = mysql_fetch_array($qry))
	{ 
        	
	echo "<tr>";
		
		echo "<td>".$row["p_id"]."</td>";
		
		echo "<td>".$row["p_name"]."</td>";
		
		echo "<td>".$row["p_age"]."</td>";
		
		echo "<td>".$row["p_contact"]."</td>";
		
		echo "<td>".$row["p_address"]."</td>";
		
		echo"<td>".$row["p_email"]."</td>";
		
		echo"<td>".$row["DOJ"]."</td>";
		
		echo"<td>".$row["d_name"]."</td>";
		
		echo"<td>".$row["p_disease"]."</td>";
		
		echo"<td>".$row["p_roomno"]."</td>";
		
		echo"<td>".$row["p_discharge"]."</td>";
		
		echo"<td>".$row["DOD"]."</td>";
		
		echo "</tr>";
	
}
	echo "</table>";
}
?>