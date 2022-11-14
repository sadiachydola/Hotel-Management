<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="css/ne.css">
<style>
body{
background-color: #00b3b3;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #004d4d;
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
  background-color: #004d4d;
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
<h1 style="text-align:center; font-size:55px;" >Welcome<br>To<br>Admin page</h1>
<div class="button" >
<a href="addinfo2.php" class="btn">Add Room</a>
<a href="AdminDelete.php" class="btn">Delete ROOM</a>
<a href="resadus.php" class="btn">Add New Admin</a>

</div>
</header>
<div style="background-color:blue; color:white;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by Hotel. All Rights Reserved.</p>
<p style="text-align:center;">Powered by Hotel.</p>
</div>
</body>
</html>