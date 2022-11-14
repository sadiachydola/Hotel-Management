<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/neu.css">
<style>
body{
            margin: 2% auto 0;
			background-color:#5c5cd6;
        }
        td{
            text-align: center;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
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
  background-color: black;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="display3.php">Our Room Type</a></li>
  <li><a href="catagory.php">Catagory</a></li>
  <li><a href="Userlogin.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>

</ul>
<header>
<div class="button" >
<a href="Adminlog.php" class="btn"><b>Admin</b></a>
<a href="Userpage.php" class="btn"><b>User</b></a>
</div>
</header>
<center><h1>Our Room Type</h1></center>
    <table align="center" style="margin: 2%">
          
        <?php
	/* Fetch data from databse(select query) */
            $res = $con->query("select * from room_type") or die(mysqli_error($con));
			$count=0;
            while($row = mysqli_fetch_array($res))
            { 
		if($count == 4) 
            {
               print "</tr>";
               $count = 0;
            }
            if($count == 0)
               print "<tr>";
            print "<td>";
            ?>
            <img src="images/<?php echo $row["image"]; ?>" height="200" width="300" alt="User image"><br><?php echo $row["room_id"]; ?> <br>
			<?php echo $row["rate"]; ?> <br> <?php echo $row["type"]; ?>
            <?php
			$count++;
            print "</td>";
			}
        ?>
    </table>
<div style="background-color:blue; color:white;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by Hotel. All Rights Reserved.</p>
<p style="text-align:center;">Powered by Hotel.</p>
</div>
</body>
</html>