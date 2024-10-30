<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "kasss_advertising_db";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
    die("Connection Failed : ".mysqli_connect_error());
}



?>