<html>
<head>
</head>
<body>
<form method="POST" action="addStudent.php" enctype="multipart/form-data">
<table border=5 align="center">
<tr>
<th colspan=2> Fill the field below to add student
</th>
</tr>
<tr>
<td>Student Roll Number :
</td>
<td><input type="text" name="srollno" placeholder="Enter Roll Number" />
</td>
</tr>
<tr>
<td>Student Name :
</td>
<td><input type="text" name="name" placeholder="Enter Student Name" />
</td>
</tr>
<tr>
<td>Student Standard Number :
</td>
<td>
<select name="std" style="padding:0 107 0 0;">
<option value="select">Select</option>
<option value="First">First</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
<option value="forth">Forth</option>
<option value="Fifth">Fifth</option>
<option value="Sixth">Sixth</option>
<option value="Seven">Seven</option>
</select>
</td>
</tr>
<tr>
<td>Student City :
</td>
<td><input type="text" name="scity" placeholder="Enter City" />
</td>
</tr>
<tr>
<td>Student contact Number :
</td>
<td><input type="text" name="scontactno"  placeholder="Enter Contact Number" />
</td>
</tr>
<tr>
<td>Select Image :
</td>
<td><input type="file" name="simg"/>
</td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="submit">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php

if(isset($_POST['srollno']))
{
	$con = mysqli_connect('localhost','root','','stsdb');
	
	$srollno = $_POST['srollno'];
	$name = $_POST['name'];
	$std = $_POST['std'];
	$scity = $_POST['scity'];
	$scontactno = $_POST['scontactno'];
	$simg = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	$submit = $_POST['submit'];
	
	move_uploaded_file($tempname,"stuimage/$simg");
	
	$qry = "INSERT INTO `addstudent`(`Rollno`, `name`, `standard`, `city`, `contactno`,`images`) VALUES ('$srollno','$name','$std','$scity','$scontactno','$simg')";
	
	$result = mysqli_query($con,$qry);
	
	if($result)
	{
		?>
		<script>
		alert("Record saved successfully");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("Roll number already exist");
		</script>
		<?php
	}
}

?>