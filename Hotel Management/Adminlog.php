<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images2/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
<!--===============================================================================================-->
<style>
 body{
		background-color:#bbff33;
            margin: 2% auto 0;
        }
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
</style>
</head>
<body>
<ul>
  <li><a class="active" href="Home1.php">Home</a></li>
  <li><a href="Userlogin.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>
</ul>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="form1" method="post" action="Logedadminpage.php" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Admin Sign In
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Please enter admin id">
						<input class="input100" type="password" name="adminid" placeholder="Admin ID">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
<br>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an Admin account?
						</span>

						<a href="resadus.php" class="txt3">
							Sign up As Admin
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>
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

if(isset($_POST['submit'])){

$adid=$_POST['adminid'];
$pass=$_POST['pass'];

if($pass=="" || $adid==""){
	echo "Either Admin ID or Password fields is empty.";
	}
	else {
	 $sql="SELECT * from ADMIN where admin_id='$adminid' AND password='$pass' AND $adid=1526 ";
		$result=mysqli_query($cont,$sql) or die("Could not Execute the select query");
		
	$row = mysqli_fetch_assoc($result);
	if(is_array($row) && !empty($row)){
		/*header('Location:Logedadminpage.php');
		echo "Login Successful";*/
	}
	else{
		echo "Invalid admin_id or password.<br><a href='Adminlog.php'> Go back</a><br><a href='resadus.php'>Register As Admin</a>";
	}
	
}
}
?>
</body>
</html>