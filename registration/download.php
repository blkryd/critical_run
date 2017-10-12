<?php
/**
 * Created by PhpStorm.
 * User: Shamem Ahmad
 * Date: 9/16/2017
 * Time: 9:21 PM
 */
date_default_timezone_set('Asia/Dhaka');
$filename = date("Y-m-d H:i").'.doc';
$export_data = unserialize(base64_decode($_GET['export']));
$file = fopen($filename,"w");
foreach ($export_data as $line){
    fwrite($file,$line);
}
fclose($file);
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; ");
readfile($filename);
unlink($filename);
exit();
