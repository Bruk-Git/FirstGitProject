<?php
// Database connection settings
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "soloda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST ['submit'])) {
    // Sanitize and validate input
    $email = $_POST['data']['email'];
    $password = $_POST['data']['password'];
    $first_name = $_POST['data']['First_name'];
    $last_name = $_POST['data']['Last_name'] ;
    $birth_date = $_POST['data']['birth_date'];
    $gender = $_POST['data']['Gender'];
    $address = $_POST['data']['address'];
    $phone_number = $_POST['data']['Phone'];
    $member_type = $_POST['data']['memberType'];

    // Insert data into the database
    $sql = "INSERT INTO signup (email, password, First_name, Last_name, birth_date, Gender, address, Phone, memberType) 
            VALUES ('$email', '$password', '$first_name', '$last_name', '$birth_date', '$gender', '$address', '$phone_number', '$member_type')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location:SignOut.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
