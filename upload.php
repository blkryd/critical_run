<?php
/**
 * Created by PhpStorm.
 * User: Heisenburg
 * Date: 10/3/2017
 * Time: 3:46 PM
 */
?>
<?php
include 'includes/dbconfig.php';
$ds = DIRECTORY_SEPARATOR;  //1

$folder_name = dirname( __FILE__ ).$ds."team_files".$ds.$_SESSION['team_info'][0];
if(FALSE == ($path = folder_exist($folder_name)))
{
    mkdir($folder_name,0700);
}

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = $folder_name . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile);//6
    return $targetFile;

}
?>
