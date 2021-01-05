<?php

session_start();

if($_SESSION['username'])

{
	echo "<h1 align='center'>Welcome ,".$_SESSION['username']." </h1>";
	echo "<h4 align='right'><a href='logout.php'>Logout</a></h4>";
	?>
	<table>
	<tr>
	<td><a href="addStudent.php">Add student in Data Base</a>
	</td>
	</tr>
	<tr>
	<td><a href="RemoveStudent.php">Remove student from Data Base</a>
	</td>
	</tr>
	<tr>
	<td><a href="UpdateStudent.php">Update student in Data Base</a>
	</td>
	</tr>
	</table>
	<?php
}
else
{
	// header('location:../adminLogin.php'); ..is use if adminLogin.php is backside of this page location
	header('location:adminLogin.php');
	//or by script
	?>
	<script>
	window.open('adminLogin.php','_self');//this line work same as above header ()
	</script>
	<?php
}
?>