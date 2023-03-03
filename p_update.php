<html>
<head><title>Hospital</title></head>
<body background="bg.jpg">

<form id="upd" action="a_edit.php" method="POST">
<img src="Logo.jpg" width="20%" height="30%">

<h1><i><u>Update Patient's Registration Form</u></i></h1>


<input type="text" name="name" id="name"
	 value="" placeholder="Enter Patient's New Name"></br></br>
	 
	<input type="text" name="age" id="age"
	 value="" placeholder="Enter Patient's New Age"></br></br>
	 
    <input type="radio" name="gender" value="male"><span style = "color:white">MALE</span>
	<input type="radio" name="gender" value="female"><span style = "color:white">FEMALE</span></br></br>
    
	<input type="text" name="contact" id="contact"
	 value="" placeholder="Enter Patient's New Contact No."></br></br>
	 
    <input type="text" name="address" id="address"
	 value="" placeholder="Enter Patient's New Address"></br></br>
	 
	<input type="text" name="email" id="email"
	 value="" placeholder="Enter Patient's New E-mail"></br></br>
		
	<labelfor="DOJ"><b>DOJ:</b>
	<input type="date" name="DOJ" id="DOJ"
	 value="" ></br></br>
	
    <input type="text" name="doctor" id="doctor"
	 value="" placeholder="Enter New Doctor's Name"></br></br>
	 
	<input type="text" name="disease" id="disease"
	 value="" placeholder="Enter New Disease Name"></br></br>
	 
	<input type="text" name="room_no" id="room_no"
	 value="" placeholder="Enter Patient's New Allotted Room no."></br></br> 
	
	Discharged:
	<input type="radio" name="discharge" value="yes">Yes
	<input type="radio" name="discharge" value="no">No<br></br>

<button type="submit">Submit</button>

</form>

 <button><a href="p_form.php">Back</a></button>

</body> </html>