<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/ne.css">
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
<a href="Userlogin.php" class="btn">Log In</a>
<a href="userreg.php" class="btn">Registration</a>
</div>
</header>
<div style="background-color: solid white; color:black;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by MJ Data. All Rights Reserved.</p>
<p style="text-align:center;">Powered by MJ.</p>
</div>
</body>
</html>