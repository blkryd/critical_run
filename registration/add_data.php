<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$uni_id = $_POST['uni_id'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO users(first_name,last_name,uni_id,email, number) VALUES('$first_name','$last_name','$uni_id','$email','$number')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysqli_query($con, $sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>East West University Business Club Participants Registration</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>East West University Business Club Participants Registration</a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post" onsubmit="return confirm('Are you sure you want to submit the form?');">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Homepage</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="uni_id" placeholder="University ID" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email address" required /></td>
    </tr>
    <tr>
    <td><input type="number" name="number" placeholder="Contact number" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
<br>
<br>
<br>
<br>
<br>
<footer>
	<p align="right"><font size="2" color="#00A2D1" align="right">Developed by : Shamem Ahmad</font></p>
	<p align="right"><font size="2" color="#00A2D1" align="right">East West University Business Club</font></p>
</footer>
</body>
</html>