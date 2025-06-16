<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>soloda Login</title>
<link rel="icon" href="images/Logos/SOLOGO.png">
<link rel="stylesheet" href="CCSS/Reg.css">
<link rel="stylesheet" href="CCSS/Index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <style>
        .error 
       {
           border:2px solid red;
       }
    </style>   
</head>
<body style="background-image: url(images/Furniture.jpg);background-repeat: no-repeat; background-size:cover; background-position: center; background-attachment: fixed;">
<div class="Menu-bar">
            <img class="imaged" src="images/photo.jpg">
            <a href="#" class="logo">SOLODA<span>&nbsp;Furniture&trade;</span></a>
            
            <ul class="navbar">
                <li><a href="Index.php">HOME</a></li>
                <li id="la"><a href="home.php">PRODUCT</a></li>   
                <li id="la"><a href="Contact.php">CONTACT</a></li>
                <li id="la"><a href="About Soloda.php">ABOUT</a></li>
                <li id="Login"><a href="IIIndex.php">Login</a></li>
                <button><a href="sol_ad.php">Admin</a></button>
            </ul>
        </div>
   <?php 
        if(isset($_POST['error']))
        {
            ?><p><?php echo $_POST['error']?></p><?php
        }
    ?>
    <div class="container">
        <h1>LOGIN</h1>
    <form action="log_co.php" method="POST">
        <div class="message"></div>
        <div class="input-box">
        <label  for="Name" >Email</label>
        <input type="Email"name="Name" placeholder="Email"><br>
        </div>
        <div class="input-box">
        <label id="password">Password</label>
       <input type="password" name="password" placeholder="Password"><br></button>
        </div>
        <div class="btn">
        <button type="submit" name="submit">Login</button></div>
        <p>Don't have an account? &nbsp; <a href="register.php">Sign up</a>
        </div>
    </form>

</body>
</html>
