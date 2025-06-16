<?php 
  session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="veiwport" content="width=device-width,initial-scale=1.0">
        <title>Loged in</title>
    </head>
    <body>
     <h1>HELLO, Your Email <?php echo $_SESSION["email"] ?></h1>
     <h2>succesfully loged in</h2>
      <a href="Login.php">Log Out <a>
    </body>
</html>