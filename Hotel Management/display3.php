<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        body{
		background-color:#bbff33;
            margin: 2% auto 0;
        }
        td{
            text-align: center;
        }
		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #263300;
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
  background-color:  #263300;
}
    </style>
</head>
<body>
<ul>
  <li><a class="active" href="Home1.php">Home</a></li>
  <li><a href="display3.php">View Room</a></li>
  <li><a href="Adminlog.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>
</ul><br>
<?php
//echo "<a href='addinfo.php'>addroom</a> | <a href='display.php'>view room</a>";
?>
    <center><h1>Our Room</h1></center>
    <table align="center">
          
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
		
       
            <img src="images/<?php echo $row["image"]; ?>" height="200" width="300" alt="image"><br><?php echo $row["room_id"]; ?> <br>
			<?php echo $row["rate"]; ?> <br> <?php echo $row["type"]; ?> 
            <?php
			$count++;
            print "</td>";
			}
			
        ?>
    </table>
    
  
</body>
</html>