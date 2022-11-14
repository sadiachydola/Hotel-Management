<!DOCTYPE html>
<html>
<head>
<title>Admin Registration Form </title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 26px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
</style>
</head>
<body >
<ul>
  <li><a class="active" href="Home1.php">Home</a></li>
  <li><a href="Userlogin.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>
</ul>
<h1 style="text-align:center;"><u>ADMIN REGISTRATION FORM </u></h1>
<form name="form1" method="post" action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="id"><b>Admin ID</b></label>
    <input type="text" placeholder="Enter Admin ID" name="id" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <p>By creating an account you agree to our Terms & Privacy.</p>

    <div class="clearfix">
      
      <button type="submit" name="submit" class="signupbtn">Submit</button>
	  <button type="reset" class="cancelbtn">Reset</button>
    </div>
  </div>
</form>

<div style="background-color:blue; color:white;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by Hotel. All Rights Reserved.</p>
<p style="text-align:center;">Powered by Hotel.</p>
</div>
<?php
$databaseHost='localhost';
$databaseName='hotel';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 echo"Connected Successfully";
}
$crat="CREATE TABLE ADMIN(
admin_id char(20),
password varchar(30))";
if(mysqli_query($cont,$crat)){
echo"New table created successfully";
}
if(isset($_POST['submit'])){
$admin_id=$_POST['id'];
$password=$_POST['psw'];
if($admin_id=="" || $password==""){
	echo "All fields should be filled.Either one or many fields are empty.";
	}

$inst="INSERT INTO ADMIN(admin_id,password) VALUES('$admin_id','$password')"; 
if(mysqli_query($cont,$inst)){
header('Location: success massage.php');}
else{echo mysqli_error($cont);}
}
?>
</body>
</html>