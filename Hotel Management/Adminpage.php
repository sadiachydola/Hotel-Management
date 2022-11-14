<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="css/ne.css">
<style>
        body{
		background-color:	 #ff4da6;
            margin: 2% auto 0;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #800040;
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
  background-color: #800040;
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
<header>
<div class="button" >
<a href="Adminlog.php" class="btn">Log In As Admin</a>
<a href="resadus.php" class="btn">Register As Admin</a>
</div>
</header>
<div style="background-color:blue; color:white;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by Hotel. All Rights Reserved.</p>
<p style="text-align:center;">Powered by Hotel.</p>
</div>
</body>
</html>