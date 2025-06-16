<?php
session_start();
include_once('sol_DB.php');

$email=$_POST["Name"];
$pass=$_POST["password"];
if(empty($email))
{
    header("Location:sol_log.php?error=email is required");
    exit();
}

if(empty($pass))
{
    echo "password is required";
    header("Location:sol_log.php");
    exit();
}

$sql="SELECT * FROM tbl_login WHERE email='$email' AND password='$pass' ";
$result=mysqli_query($db,$sql);
if($result)
{
    $rows=mysqli_fetch_assoc($result);
    if($rows['email']==$email and $rows['password']==$pass)
    {
        echo "loged in";
        $_SESSION['email']=$rows['email'];
        $_SESSION['password']=$rows['password'];
        header("Location:logout.php");
        exit();
    }
    else
    {
        header("Location:sol_log.php?error=incorrect password or email ");
        exit();
    }
}
else
{
    header("Location:sol_log.php");
    exit();
}

?>
