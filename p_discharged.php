<html>
<head>

</head>
<body>

<form id="upd" action="p_dis.php" method = "POST">
<h2>Update Discharge </h2>

<input type = "text" name="name" id="name" value=""
placeholder="Patient's Name"></br></br>

Discharged:
	<input type="radio" name="discharge" value="Yes">Yes
	<input type="radio" name="discharge" value="No">No<br></br>

<b>DOD:</b>
	<input type="date" name="DOD" id="DOD"
	 value="" ></br></br>

<button type="submit">Submit</button>

</form>
<button><a href="home.php">Back</a></button>
</body>
</html>