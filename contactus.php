<?php 
  session_start();
  if (!isset($_SESSION['email'])) {
	  $_SESSION['msg']="You must login first";
	  header('location:Contact.php');
  } 

?>
<!DOCTYPE HTML>
<html lang="en">
    
    <head>
      
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="veiwport" content="width=device-width,initial-scale=1.0">
        <title> Thank You for Your Support </title>
   <style>
    h1 {
  font-size: 36px;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
}

h2 {
  font-size: 24px;
  color: #666;
  text-align: center;
  margin-bottom: 40px;
}

a {
  text-decoration: none;
  color: #337ab7;
}

a:hover {
  color: #23527c;
}

 .backButton {
  display: flex;
  justify-content: center;
  margin-left: 15cm;
  text-align: center;
  background-color: lawngreen;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 40px;
}
.backButton a{
  color: #23527c;
}

 .backButton:hover {
  color: #fff;
}
   </style>
      </head>
    <body>
     <h1>Thank You For Your Support</h1>
     <h2>We Will Respond as soon as possible </h2>
     <div class="backButton"> <a href="Contact.php">Back<a></div>
    </body>
    <?php 
      
    ?>
</html>