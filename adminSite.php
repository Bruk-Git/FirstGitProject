<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['password']))
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>soloda admin </title>
        <link rel="icon" href="images/Logos/SOLOGO.png">
        <link rel="stylesheet" href="CCSS/Reg.css">
        <link rel="stylesheet" href="CCSS/Index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            
        </head>
        <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    h1 {
      color: #00698f;
    }
    button {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #3e8e41;
    }
    a {
      text-decoration: none;
    }
  </style>

        <body>
           <h1>hello<?php 
            echo $_SESSION['email'];
            ?></h1><br>
            <?php 
 include_once("header.php");
?>
            <button><a href="adOUT.php">LOG OUT</a></button>
            <button><a href="ContactTable.php">Contact Table</a> </button>
        </body>
        </html><?php

    }
    else
    {
        header("Location:sol_ad.php");
        exit();
    }
?>