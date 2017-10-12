<?php
//error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$database = "critical_db";
$con = mysqli_connect("$host", "$user", "$password", "$database");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die();

}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'func.php';
?>