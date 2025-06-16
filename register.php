<?php
$connect = new PDO("mysql:host=localhost;dbname=soloda", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_login 
 (first_name, last_name, gender, email, password, address, mobile_no) VALUES 
 (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
 ";
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':password'   => $_POST["password"],
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sign Up</title>
  <link rel="icon" href="images/Logos/SOLOGO.png"> 
	<title>Soloda Contact</title>
  <link rel="stylesheet" type="text/css" href="CCSS/Contact.css">
  <link rel="stylesheet" href="CCSS/LOG.css">
  <link rel="stylesheet" href="CCSS/Index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CCSS/register.css">
  <script src="register.js"></script>
  <style>

  </style>
 </head>
 <body style="background-image: url(images/bgfor.jpg);background-repeat: no-repeat; background-size:cover; background-position: center; background-attachment: fixed;">
 <div class="Menu-bar">
        <img class="imaged" src="images/photo.jpg">
        <a href="Index.php" class="logo">SOLODA<span>&nbsp;Furniture&trade;</span></a>
        
        <ul class="navbar">
            <li><a href="Index.php">HOME</a></li>
  
            <li ><a href="home.php">PRODUCT</a></li>          
            <li ><a href="Contact.php">CONTACT</a></li>
            <li><a href="About Soloda.php">ABOUT</a></li>
            <li id="Login"><a href="sol_log.php">Login</a></li>

        </ul>
    </div>
 <br />
  <div class="container box">
   <br />
   <h2 align="center" id="header"> Sign up Here </h2><br />
   <?php echo $message; ?>
   <form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Login Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Login Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password" class="form-control" />
         <span id="error_password" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg" style="padding-bottom:30px">Next</button>
        </div>
        Already Have Accuount <a href="sol_log.php" style="text-decoration:underline">Login</a>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Personal Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Last Name</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked> &nbsp;  &nbsp;  &nbsp;  &nbsp;  Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female">  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Female
         </label>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg" style="padding-bottom:30px">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg" style="padding-bottom:30px" >Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Contact Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg" style="padding-bottom:30px">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg" style="padding-bottom:30px" >Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script> </script>
