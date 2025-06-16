<?php
    include_once('test.php');
    $sql="SELECT * FROM contacttable";
    $result=mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>soloda products site</title>
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
    table {
      width: 60%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f0f0f0;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
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
 
    </style>   
</head>
<body>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Phone/td>
            <td>Email</td>
            <td>Subject</td>
            <td>Message</td>
            <td>Delete</td>            
        </tr>
       
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
                ?>
                <tr> 
                <td><?php echo $rows["name"]; ?></td>
                <td><?php echo $rows["phone"]; ?></td>
                <td><?php echo $rows["email"]; ?></td>
                <td><?php echo $rows["subject"]; ?></td>
                <td><?php echo $rows["message"]; ?></td>
                <td><form action="handle_actions.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="action" value="delete">Delete</button>
                </form></td> 
                </tr>
                <?php
            }
            ?>           
       
    </table><br>
    <button ><a href="adminSite.php">Admin Site</a></button>    
</body>
</html>
