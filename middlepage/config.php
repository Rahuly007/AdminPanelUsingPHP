<?php
ob_clean();
ob_start();
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "test";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if ($conn) {
	echo "Database Connected....";
} else {
	echo "Database Not connected...";
}
