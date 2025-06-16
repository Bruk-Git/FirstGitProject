<!DOCTYPE html>
<?php 
 session_start();
 if (!isset($_SESSION['email'])) {
     $_SESSION['msg']="You must SignUp first";
     header('location:SignUp.php');
 } 
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Out</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>
    <h2>Signed up successfully</h2>
    <p>Thank you for signing up. </p>
    <p>Click <a href="index.php">here</a> to go back to Home Page 
    
</body>
</html>