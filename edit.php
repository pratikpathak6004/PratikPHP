

<h1> this is edit.php page
</h1>
<?php

//line no 85 could be remove

$rollno = $_GET['rollno'];

$con = mysqli_connect('localhost','root','','stsdb');

$query = "SELECT * FROM `addstudent` WHERE `Rollno`='$rollno'";

$run = mysqli_query($con,$query);

$data = mysqli_fetch_assoc($run);

/* 
echo "<pre>";
print_r ($data);
echo "<pre>"; 
*/


?>

<html>
<head>
</head>
<body>

<form method="POST" action="updatebutton.php" enctype="multipart/form-data">


<table border=5 align="center">
<tr>
<th colspan=2> Edit the student data
</th>
</tr>
<tr>
<td>Student Roll Number :
</td>
<td><input type="text" name="srollno" value="<?php echo $data['Rollno']?>" disabled="disabled" />
</td>
</tr>
<tr>
<td>Student Name :
</td>
<td><input type="text" name="name" value="<?php echo $data['name']?>" />
</td>
</tr>
<tr>
<td>Student Standard Number :
</td>
<td>
<select name="std" required="selected" value="" style="padding:0 107 0 0;">
<option required="selected" value="<?php echo $data['standard'] ?>"><?php echo $data['standard'] ?></option>

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
<td><input type="text" name="scity" value=<?php echo $data['city'] ?> />
</td>
</tr>
<tr>
<td>Student contact Number :
</td>
<td><input type="text" name="scontactno" value = <?php echo $data['contactno'] ?> />
</td>
</tr>
<tr>
<td>Select Image :
</td>
<td><input type="file" name="simg" value="<?php echo $data['images'] ?>" />
</td>
</tr>
<tr>
<td colspan=2 align="center">
<input type="hidden" name="srollno" value= <?php echo $data['Rollno'] ?> />
<input type="submit" name="submit" value="Update Data">
</td>
</tr>
</table>
</form>
</body>
</html>



