<!DOCTYPE html>
<?php 
 session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="images/Logos/SOLOGO.png">
    <link rel="stylesheet" href="CCSS/LOG.css">
    <link rel="stylesheet" href="CCSS/Index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background-image: url(images/Back\ 3.avif);background-repeat: no-repeat; background-size:cover; background-position: center; background-attachment: fixed;">
    <div class="Menu-bar">
        <img class="imaged" src="images/photo.jpg">
        <a href="#" class="logo">SOLODA<span>&nbsp;Furniture&trade;</span></a>
        
        <ul class="navbar">
            <li id="homei"><a href="Index.php">HOME</a></li>
            <li id="la"><a href="Shop.php">PRODUCT<i class="fas fa-caret-down"></i></a>
            <div class="submenu">
                <ul>
                <li><a href="Shop.php#Chair">Chair</a></li>
                <li><a href="Shop.php#Bed">Bed</a></li>
                <li><a href="Shop.php#Sofa">Sofas</a></li>
                <li><a href="Shop.php#Lamp">Lamp</a></li>
                <li><a href="Shop.php#cabinate">Cloth Cabinate</a></li>
                </ul>
            </div>
            </li>           
            <li id="la"><a href="Contact.php">CONTACT</a></li>
            <li id="la"><a href="About Soloda.php">ABOUT</a></li>
            <li id="Login"><a href="Login.php">Login</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Login</h1>
        <form action="Logout.php" method="post" id="Lognin-form" onsubmit="return validateForm()" >
            <div class="input-box">
               <input id="email" type="email"  name="email" placeholder="Email" required>
               <label id="error-msg"></label>
               <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>            
            </div>
            <div  class="Remember-Forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">forgot password</a>
            </div>
            
            <div class="btn">
                <button type="submit">Login</button>
            </div>
            <div class="register-link">
                <p>Don't Have Account &nbsp;<a href="Register.php">Register</a></p>
            </div>
        </form>
    </div>
    <script>
        function validateForm() {
    var emailInput = document.getElementById("email");
    var passwordInput = document.getElementById("password");
    var errorMessage = document.getElementById("error-msg");

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(emailInput.value)) {
      errorMessage.textContent = "Please enter a valid email address";
      email.style.borderColor="red";
      emailInput.focus();

      return false;
    }

    errorMessage.textContent = "";
    return true;
}
    </script>
</body>
</html>