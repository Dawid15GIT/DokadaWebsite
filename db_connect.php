<?php  

$sname = "localhost:3307";
$uname = "root";
$password = "Ciesiel15";

$db_name = "dokada-images";

$conn = mysqli_connect($sname, $uname, $password, $db_name)or die("Could not connect to mySQL"); 



if (!$conn) {
	echo "Connection failed!";
	exit();
}