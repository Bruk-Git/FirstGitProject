<?php
// Database configuration
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "soloda"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>