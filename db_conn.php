<?php

$servername= "localhost";
$username= "root";
$password = "";
$dbname = "soloda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}