<?php
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$database = "ewubc";
$con = mysqli_connect("$host", "$user", "$password", "$database");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
?>