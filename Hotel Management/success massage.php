<!DOCTYPE html>
<html>
<head>
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

</ul><br>

<center>
<h1>THANK YOU</h1>
<p>Your Registration is Successfull</p>
<a href='userreg.php'><button type="button">Back</button></a>
<a href='Userlogin.php'><button type="button">Login</button></a></center>
</body>
</html>
