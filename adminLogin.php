<?php

session_start();

if(isset($_SESSION['username']))

{
	header('location:adminPage.php');
}

?>

<html>
<head>
<head>
<body>
<form method="POST" action="">
<table align="center" border="2">
<h1 align="center" >Admin login page
<h1>
<tr>
<td>User name:
</td>
<td>
<input type="text" name="uname"/>
</td>
</tr>
<tr>
<td>Password :
</td>
<td><input type="Password" name="pass"/>
</td>
</tr>
<tr>
<td colspan=2 align="center" > <input type="submit" name="submit"/>
</td>
</tr>
</table>
</form>
</body>
</html>


<?php

if(isset($_REQUEST['submit']))
{
	$uname = $_REQUEST['uname'];
	$pass = $_REQUEST['pass'];
	
$con = mysqli_connect('localhost','root','','stsdb');

$query = "SELECT * FROM `admin` WHERE `username`='$uname' AND `password`='$pass'";

$run = mysqli_query($con,$query);

$row = mysqli_num_rows($run);

if($row <1)

{
?>
<script> alert("The username or password you have entered is invalid.");
window.open('adminLogin.php','_self');
</script>
<?php
}
else
{
	$data = mysqli_fetch_assoc($run);
	$id = $data['username'];
	
	
	
	$_SESSION['username'] = $id;
	header("location:adminPage.php");
}

}


?>
