<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/Logos/SOLOGO.png"> 
	<title>Soloda Contact</title>
  <link rel="stylesheet" type="text/css" href="CCSS/Contact.css">
  <link rel="stylesheet" href="CCSS/LOG.css">
  <link rel="stylesheet" href="CCSS/Index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-image: url(images/ABT.jpg);background-repeat: no-repeat; background-size:cover; background-position: center; background-attachment: fixed;">
    <div class="Menu-bar">
        <img class="imaged" src="images/photo.jpg">
        <a href="Index.php" class="logo">SOLODA<span>&nbsp;Furniture&trade;</span></a>
        
        <ul class="navbar">
            <li><a href="Index.php">HOME</a></li>
            <li id="la"><a href="home.php">PRODUCT</a></li>
            <li id="homei"><a href="Contact.php">CONTACT</a></li>
            <li id="la"><a href="About Soloda.php">ABOUT</a></li>
            <li id="Login"><a href="sol_log.php">Login</a></li>
        </ul>
    </div>
    <div class="cont">
        <h1>Contact Us!</h1><br/>
        <p>We woud love to respond to your queries and help you succeed. Keep in touch us  </p>
        <div class="contact-box">
            <div class="cont-left">
                
             <h3>Send Your Message </h3>
             
             <form name="contactForm" action="SERVER.php" method="post" onsubmit="return validateForm()">
  <div class="input-row">
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter your name"/>
      <div id="nameError" class="error" style="color:red"></div>
    </div>

    <div class="input-group">
      <label>Phone</label>
      <input type="number" name="phone" placeholder="Enter your phone number"/>
      <div id="numberError" class="error" style="color:red"></div>
    </div>
  </div>
  <div class="input-row">
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your Email"/>
      <div id="emailError" class="error" style="color:red"></div>
    </div>

    <div class="input-group">
      <label>Subject</label>
      <input type="text" name="subject" placeholder="Subject"/>
      <div id="subjectError" class="error" style="color:red"></div>
    </div>
  </div>
  <div>
    <label>Message</label>
    <textarea name="message" cols="30" rows="5" placeholder="Enter Your Message"></textarea>
    <div id="messageError" class="error" style="color:red"></div>
    <button type="submit">Send</button>
  </div>
</form>
            </div>  
            
            <div class="cont-right">
             <h3>Reach us</h3>
                <p>Call: +852 6740 9876<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +356 3728 2922<br><br>
                   Email: support@soloda.com<br><br>
                   Address: No.18, Queensway Building, Central, Hong Kong<br></p>
            </div>
        </div>
    </div>     
    <script>
  function validateForm() {
    let name = document.getElementsByName("name")[0].value;
    let phone = document.getElementsByName("phone")[0].value;
    let email = document.getElementsByName("email")[0].value;
    let subject = document.getElementsByName("subject")[0].value;
    let message = document.getElementsByName("message")[0].value;

    let nameError = document.getElementById("nameError");
    let numberError = document.getElementById("numberError");
    let emailError = document.getElementById("emailError");
    let subjectError = document.getElementById("subjectError");
    let messageError = document.getElementById("messageError");

    let isValid = true;

    if (name === "") {
      nameError.innerHTML = "Please enter your name";
      isValid = false;
    } else {
      nameError.innerHTML = "";
    }

    if (phone === "") {
      numberError.innerHTML = "Please enter your phone number";
      isValid = false;
    } else {
      numberError.innerHTML = "";
    }

    if (email === "") {
      emailError.innerHTML = "Please enter your email";
      isValid = false;
    } else if (!validateEmail(email)) {
      emailError.innerHTML = "Please enter a valid email";
      isValid = false;
    } else {
      emailError.innerHTML = "";
    }

    if (subject === "") {
      subjectError.innerHTML = "Please enter a subject";
      isValid = false;
    } else {
      subjectError.innerHTML = "";
    }

    if (message === "") {
      messageError.innerHTML = "Please enter a message";
      isValid = false;
    } else {
      messageError.innerHTML = "";
    }

    return isValid;
  }

  function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
  }
</script>
</body>
    </html>