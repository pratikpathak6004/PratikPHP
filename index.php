<html>
<head>
<head>
<body>
<pre style="margin: 0 0 0 1242px;" ><a href="adminLogin.php" align = "right" >For admin only</a></pre>
<h1 style="text-align: center;">Student Management System 
</h1>
<form method="POST" enctype="multipart/form-data">
<table border=2 style="margin: 15px 0 0 503px">
<tr>
<td>Enter roll number :</td><td>
<input style="padding:4 5 5 0;" type="text" name="srollno" required="required"/></td>
</tr>
<tr>
<td>Select standard :</td><td><select name="std" style="padding:4 107 5 0;" >
<option>-Select-</option>
<option value="First">First</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
<option value="forth">Forth</option>
<option value="Fifth">Fifth</option>
<option value="Sixth">Sixth</option>
<option value="Seven">Seven</option>
</select</td>
</tr>
<tr>
<td colspan=2 align="center">
<input type="submit" name="submit" style="padding: 9 123px 9 138px;" />
</td>
</tr>
</table>
</form>
<body>
<html>

<?php

if(isset($_POST['submit']))
{
	$std = $_POST['std'];
	$rollno = $_POST['srollno'];
	
	
	
	$con = mysqli_connect('localhost','root','','stsdb');
	
	$query = "SELECT * FROM `addstudent` WHERE `standard`='$std' AND `Rollno`= '$rollno'";
	
	$run = mysqli_query($con,$query);
	
	$data = mysqli_fetch_assoc($run);
	
	//print_r ($data);
	
	//$row = mysqli_num_rows($data);
	
	
	
	?>
	<table border=1 align="center">
	<tr>
	<th colspan=4 >Student Record
	
	</th>
	</tr>
	<tr>
	<th rowspan=5> <img style="max-height: 192px;" src="stuimage/<?php echo $data['images'];?>">
	</th><th>Roll Number
	</th><th><?php echo $data['Rollno'] ?>
	</th>
	</tr>
	<tr>
	<th>Student Name
	</th><th><?php echo $data['name']?>
	</th>
	</tr>
	<tr>
	<th>Standard
	</th><th><?php echo $data['standard']?>
	</th>
	</tr>
	<tr>
	<th>City
	</th><th><?php echo $data['city']?>
	</th>
	</tr>
	<tr>
	<th>Contact Number
	</th><th><?php echo $data['contactno']?>
	</th>
	</tr>
	</table>
	<?php
}

?>