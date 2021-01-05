<?php

$con = mysqli_connect('localhost','root','','stsdb');
		
		$rollno = $_REQUEST['rollno'];
		
	$qry = "DELETE FROM `addstudent` WHERE `Rollno`='$rollno';";
	
	$result = mysqli_query($con,$qry);
	
	if($result)
	{
		?>
		<script>
		alert("Record deleted successfully");
		window.open("RemoveStudent.php","_self");
		</script>
		<?php
	}




 























/*
  $con = mysqli_connect('localhost','root','','stsdb');
  
  $query2 = "";
  
  mysqli_query($con,$query2);
  
*/
?>