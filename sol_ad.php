<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>soloda admin site</title>
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
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    form {
      width: 50%;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="name"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
    button{
      background-color: #4CAF50;
      width: 60px;
      height: 30px;
      color: black;
    }
  </style>
    </style>   
</head>
<body>
    <?php 
        if(isset($_POST['error']))
        {
            ?><p><?php echo $_POST['error']?></p><?php
        }
    ?>
    <form action="ad_co.php" method="POST">
        
        <label  for="Name" >Email</label>
        <input type="name"name="Name"><br>
        <label id="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="login">
        <button><a href="sol_log.php">Back</a></button>
    </form>
</body>
</html>
