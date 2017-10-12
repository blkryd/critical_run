<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
	$result_set=mysqli_query($con,$sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$uni_id = $_POST['uni_id'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',uni_id='$uni_id',number='$number',email='$email' WHERE user_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($con,$sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
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
    <label>East West University Business Club Participants Registration</label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post" a>
    <table align="center">
		<tr>
			<td><input type="text" name="first_name" value="<?php echo $fetched_row['first_name']?>" required /></td>
		</tr>
		<tr>
			<td><input type="text" name="last_name" value="<?php echo $fetched_row['last_name']?>" required /></td>
		</tr>
		<tr>
			<td><input type="text" name="uni_id" value="<?php echo $fetched_row['uni_id']?>" required /></td>
		</tr>
		<tr>
			<td><input type="text" name="email" value="<?php echo $fetched_row['email']?>" required /></td>
		</tr>
		<tr>
			<td><input type="text" name="number" value="<?php echo $fetched_row['number']?>" required /></td>
		</tr>
		<tr>
			<td><button type="submit" name="btn-update"><strong>UPDATE</strong></button></td>
		</tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>