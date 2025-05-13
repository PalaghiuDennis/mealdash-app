<?php  
$servername="localhost";
$username="root";
$password = "";
$database="mealdash";

$connection=new mysqli($servername, $username, $password, $database);


if (!$connection) {
	echo "Connection failed!";
	exit();
}