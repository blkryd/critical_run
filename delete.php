<?php
/*
*
 * Created by PhpStorm.
 * User: Heisenburg
 * Date: 10/6/2017
 * Time: 12:12 PM
 */
$fileList = json_decode($_POST['fileList']);

for($i = 0; $i < sizeof($fileList); $i++)
{
    unlink(basename($fileList[$i]));
}
?>