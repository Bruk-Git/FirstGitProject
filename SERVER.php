<?php

session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "contact"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs and sanitize them
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);
    
    if (empty($errors)) {
        $sql = "INSERT INTO contacttable (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Message Sent Successfully";
            $_SESSION["email"] = $email;
            header("Location: contactus.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

$conn->close();

