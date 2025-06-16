<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="icon" href="images/Logos/SOLOGO.png">
<link rel="stylesheet" href="CCSS/SignUp.css">
<link rel="stylesheet" href="CCSS/Index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body style=" background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(images/Furniture.jpg);background-position: center;
    background-size: cover;">
    <script>
    
    </script>
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
        <form name="form1" id="Form1" method="POST" action="SignUpServer.php" onsubmit="validateForm(event)">
            <h2>Sign Up</h2>
            
            <input type="email" name="email" placeholder="Email"><br><br>
            <div id="emailError" class="error"></div>
            <input type="password" placeholder="Password"><br><br>
            <input type="password" placeholder="Confirm Password"><br><br>
            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>
            <div class="Have-acc">
                <p>Already Has Account&nbsp;<a href="Login.php">Login</a></p>
            </div>
            </form>

            <form id="Form2" method="POST" action="SignUpServer.php" onsubmit="validateForm(event)">
               <h2>Personal information </h2>
                
                <input type="name" name="First_name" placeholder="First Name"><br><br>
                <input type="name" name="Last_name" placeholder="Last Name"><br><br>
                <input type="date" name="birth_date" placeholder="Birth Date"><br>
                <div class="gender">
               <lable>Gender</lable>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;            
                <lable>Male<input type="radio" name="Gender" value="Male"><br></lable>
                <lable>Female<input type="radio" name="Gender" value="Female"></lable>
            </div><br>
                <div class="btn-box">
                    <button type="button" id="Back1">Back</button>
                    <button type="button" id="Next2">Next</button>
                </div>
                
                </form>

                <form id="Form3" method="POST" action="SignUpServer.php" onsubmit="validateForm(event)">
                    <h2>Social Linked </h2>
                    
                    <input type="adress" name="adress" placeholder="adress"><br><br>
                    <input type="number" name="Phone" placeholder="Phone Number"><br><br>
                    <lable> Select your Member Type *</lable><br>
                    <select name="memberType" id="memberType" size="1" class="m-selct all_input">
                        <option value="Silver">Silver</option>
                         <option value="Gold"> Gold </optoion>
                         <option value="Diamond"> Diamond </option>
                         <option value="Platinium"> Platinium  </option>
                         <option value="First"s> First  </option>
                    </select><br><br>
                    <div class="btn-box">
                        <button type="button" id="Back2">Back</button>
                        <button type="submit">Submit</button>
                    </div>
                    
                    </form>
                    <div class="step-row">
                        <div id="progress"></div>
                        <div class="step-col">Step 1</div>
                        <div class="step-col">Step 2</div>
                        <div class="step-col">Step 3</div>
                    </div>
    </div>
    <script>
        var Form1 = document.getElementById("Form1");
        var Form2 = document.getElementById("Form2");
        var Form3 = document.getElementById("Form3");

        var Next1 = document.getElementById("Next1");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");
        var progress = document.getElementById("progress");
        var nameError = document.getElementById
        Next1.onclick = function () {
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.width = "240px";
          }
          Back1.onclick = function () {
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.width = "120px";
          }
          
        Next2.onclick = function () {
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.width = "360px";
          }
          Back2.onclick = function () {
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.width = "240px";
          }
    </script>
</body>
</head>
</html>