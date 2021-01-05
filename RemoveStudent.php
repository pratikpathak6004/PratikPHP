<form method="POST" action="RemoveStudent.php" enctype="multipart/form-data">

<table align="center" border=2>
<tr>
<th colspan=2>
Enter Student Detail
</th>
</tr>
<tr>
<td>
Enter Student Name :
</td>
<td>
<input type="text" name="usstuname" required="required"/>
</td>
</tr>
<tr>
<td>
Select Standard :
</td>
<td>
<select name="usstd" style="padding:0 107 0 0;">
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
<td colspan=2 align="center"><input type="submit" name="submit"/>
</td>
</tr>
</table>

</form>

<?php
if(isset($_POST['submit']))
{
	
	//below table will create when user click on submit button 
	?>
	<table border=2 align="center" >
<tr>
<th>NO.</th>
<th>Rollno</th>
<th>Name</th>
<th>Standard</th>
<th>City</th>
<th>Contact</th>
<th>Images</th>
<th>Operation</th>
</tr>

<?php

	if(isset($_POST['submit']))
	{
	
	$usstuname = $_POST['usstuname'];
	$usstd = $_POST['usstd'];
	
	
	
	$con = mysqli_connect('localhost','root','','stsdb');
	$query = "SELECT * FROM `addstudent` WHERE `name`= '$usstuname' AND `standard`='$usstd'";
	$run = mysqli_query($con,$query);
	
	//$row = mysqli_num_rows($run);
	$counter = 0;
	while($data=mysqli_fetch_assoc($run))
	{
		$counter++;
		?>
		<tr>	
<td><?php echo $counter;?></td>
<td><?php echo $data['Rollno'];?></td>
<td><?php echo $data['name'];?></td>
<td><?php echo $data['standard'];?></td>
<td><?php echo $data['city'];?></td>
<td><?php echo $data['contactno'];?></td>
<td><img src="stuimage/<?php echo $data['images'] ?>" style="max-width:80px;" /></td>
<td><a href="delete.php?rollno=<?php echo $data['Rollno']; ?>">Delete</a></td>
		</tr>
		<?php
	}
	
	?>
	</table>
	<?php
}
?>
	<?php
	
	}
?>