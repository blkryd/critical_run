<?php
include '../includes/dbconfig.php';
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM tbl_team_info WHERE team_id=".$_GET['delete_id'];
	$info_query="SELECT * FROM tbl_team_info WHERE team_id=".$_GET['delete_id'];
	$info = mysqli_query($con,$info_query);
	$info = mysqli_fetch_row($info);

	mysqli_query($con,$sql_query);
	$team_dir =  realpath(dirname(__FILE__)."/../".DIRECTORY_SEPARATOR.'team_files'.DIRECTORY_SEPARATOR.$info[1]);
    deleteDir($team_dir);
	//header("Location: $_SERVER[PHP_SELF]");
}
if(isset($_REQUEST['team_name'])){
    $dir = realpath(dirname(__FILE__)."/../".DIRECTORY_SEPARATOR.'team_files'.DIRECTORY_SEPARATOR.$_REQUEST['team_name']);
    download_zip($dir,$_REQUEST['team_name']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Critical Run 2017 CMS</title>

 <link href="assets/css/bootstrap.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript"  src="assets/js/jquery-1.12.4.js">
    </script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"> </script>
<script type="text/javascript">
function download(team_name)
{
	if(confirm('Sure to download ?'))
	{
		window.location.href='index.php?team_name='+team_name;
	}
}
function delete_id(id)
{
	if(confirm('Sure to delete_id?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Critical Run 2017 CMS</label>
    </div>
</div>

<div id="body">
	<div id="content" class="">
<table id="reg" class="table table-bordered nowrap display"  width="100%" style="font-family: Arial, Helvetica, sans-serif;font-size: 15px">
      <thead>
          <tr>
              <th>SL: </th>
              <th>Team name</th>
              <th>University name</th>
              <th>Leader</th>
              <th>Member 1</th>
              <th width="20px">Member 2</th>
              <th>Time</th>
              <th>IP </th>
              <th>Operations</th>
          </tr>
      </thead>
       <tbody>
            <?php
            $sql_query="SELECT * FROM tbl_team_info ORDER BY team_id DESC";
            $result_set=mysqli_query($con,$sql_query);
            if(mysqli_num_rows($result_set)>0)
            {
                $coun = 1 ;
                while($row=mysqli_fetch_row($result_set))
                {
                    ?>
                    <tr>
                        <td><?php echo $coun++; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td>
                            <?php $leader = unserialize($row[3])?>
                            ID :  <?php echo $leader[0];?><br>
                        Phone no : <?php echo $leader[1];?><br>
                         Email : <?php echo $leader[2];?>
                        </td>
                        <td>
                            <?php $leader = unserialize($row[4])?>
                            ID :  <?php echo $leader[0];?><br>
                            Phone no : <?php echo $leader[1];?><br>
                            Email : <?php echo $leader[2];?>
                        </td>
                        <td>
                            <?php $leader = unserialize($row[5])?>
                            ID :  <?php echo $leader[0];?><br>
                            Phone no : <?php echo $leader[1];?><br>
                            Email : <?php echo $leader[2];?>
                        </td>
                        <td><?php echo $row[6]; ?></td>
                        <td><?php echo $row[7]; ?></td>

                        <td align="center"><a class="btn btn-primary" href="javascript:download('<?php echo $row[1]; ?>')">Download</a> <a class="btn btn-danger" href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>


                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="8">No Data Found !</td>
                </tr>
                <?php
            }
            ?>
    </tbody>
    </table>
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

<script type="application/javascript">
    $(document).ready(function() {
        $('#reg').DataTable({
                "paging": true,
                "lengthChange":false,
            "autoWidth": false
            }
        );

    } );
</script>
</body>
</html>