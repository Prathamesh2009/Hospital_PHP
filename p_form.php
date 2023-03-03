<html>
<head>
<title>Hospital</title>
</head>
<body background="bg.jpg">

<form id="reg" action="p_insertion.php" method="POST">
<img src="Logo.jpg" width="10%" height="20%">


<h1><i><u>Patient's Registration Form</u></i></h1>

    <input type="text" name="name" id="name"
	 value="" placeholder="Enter Patient's Name"></br></br>
	 
	<input type="text" name="age" id="age"
	 value="" placeholder="Enter Patient's Age"></br></br>
	 
    <input type="radio" name="gender" value="male">MALE
	<input type="radio" name="gender" value="female">FEMALE</br></br>
     
	<input type="text" name="contact" id="contact"
	 value="" placeholder="Enter Patient's Contact No."></br></br>
	 
	<input type="text" name="address" id="address"
	 value="" placeholder="Enter Patient's Address"></br></br>
	 
	<input type="text" name="email" id="email"
	 value="" placeholder="Enter Patient's E-mail"></br></br>
	 
	<labelfor="DOJ"><b>DOJ:</b>
	<input type="date" name="DOJ" id="DOJ"
	 value="" ></br></br>
	
    <input type="text" name="doctor" id="doctor"
	 value="" placeholder="Enter Doctor Name"></br></br>
	 
	<input type="text" name="disease" id="disease"
	 value="" placeholder="Enter Disease Name"></br></br>

	 
	<input type="text" name="room_no" id="room_no"
	 value="" placeholder="Enter Patient's Allotted Room no."></br></br> 
	
	Discharged:
	<input type="radio" name="discharge" value="yes">Yes
	<input type="radio" name="discharge" value="no">No<br></br>
		 
	<button type="Submit">Submit</button></br></br>
	<input type="Reset" name="Reset" value="Reset">
	
	
	<h2><i><u>Already Registration</u></i></h2>
	<button>
	<a href="p_update.php">Edit</a></button>
	<button>
	<a href="p_discharged.php">If Discharged</a></button>
	</form>
	
	</body>
	</html>