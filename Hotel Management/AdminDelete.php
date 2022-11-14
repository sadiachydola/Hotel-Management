<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Data</title>
    <style>
	        body{
		background-color: #df9fbf;
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
  background-color: 	 #602040;
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
  background-color: 	 #602040;
}
    </style>
</head>
<body>
<ul>
  <li><a class="active" href="Home1.php">Home</a></li>
  <li><a href="display3.php">Our Room</a></li>
  <li><a href="Adminlog.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>
</ul><br>
    <center><h1>All Registered Room</h1></center>
    <table align="center" border="1">
        <tr>
            <th>Room Id</th>
            <th>Rate</th>
            <th>Type</th>
            <th> Room Picture</th>
            <th>Action</th>
        </tr>
          
        <?php
	/* Fetch data from databse(select query) */
            $res = $con->query("select * from room_type") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <tr>
            <td><?php echo $row["room_id"]; ?></td>
			<td><?php echo $row["rate"]; ?></td>
            <td><?php echo $row["type"]; ?></td>
            <td><img src="images/<?php echo $row["image"]; ?>" height="80" width="80" alt="image"></td>
            <td><a href="Update1.php?isEdit=<?php echo $row["room_id"]; ?>">Edit</a> |<a href="?delete=<?php echo $row["room_id"]; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
	<?php
	/* Delete code.Wehen click on delete link this will perform.!*/
        if(isset($_REQUEST["delete"]))
        {$query2="select image from room_type where room_id='".$_REQUEST["delete"]."'";
            $result=mysqli_query($con,$query2) or die(mysqli_error($con));
            while($row1=mysqli_fetch_array($result))
            {
                $image1=$row1["image"];
            }
            unlink("images//".$image1);
			$query3="delete from room_type where room_id='".$_REQUEST["delete"]."'";
            mysqli_query($con,$query3) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='AdminDelete.php';</script>";   
        }
    ?>
	
</body>
</html>