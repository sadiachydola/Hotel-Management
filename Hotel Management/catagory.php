<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/neu.css">
<style>
body{
            margin: 2% auto 0;
			background-color:#ffcccc;
        }
        td{
            text-align: center;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: blue;
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
  users {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFD700;
  color: white;

}
</style>
</head>
<body>

<div class="header">
  <h1>Catagory</h1>
</div>


  <li><a class="active" href="home1.php">Home</a></li>
  <li><a href="display3.php">Our Room Type</a></li>
  <li><a href="catagory.php">Catagory</a></li>
  <li><a href="Userlogin.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Adminpage.php">Admin</a></li>

<div class="row">

  <div class="container">

  <form action="catagory.php" method="post">
    <div class="row">
    <div class="col-25">
    </div>
    <div class="col-75">
	<label for="catg">Select a Catagory</label>
	<select name="catg">
<?php

 $sql="select distinct type from room_type";
 $r=mysqli_query($con,$sql);
 
 
    while($row=mysqli_fetch_array($r))
    {
        $date=$row['type'];
        echo "<option value='$type'>$type</option>";
    }
?>
</select>
  </div>
  </div> 
  <div class="row">
    <input type="submit" value="OK" name="ok">
  </div>
  </form>
</div>

<?php

if(isset($_POST['ok']))
{
	$c=$_POST['catg'];
	
	$query="select * from room_type where type='$c'";
	$r=mysqli_query($con,$query);
	echo "<table id='users'>";
 echo "<tr>
 <th>Room ID</th>
 <th>Rate</th>
 <th>Type</th>
 <th>Room Picture</th>
  </tr>";
    while($row=mysqli_fetch_array($r))
    {
		$rid=$row['room_id'];
        $rate=$row['rate'];
		$type=$row['type'];
		$image=$row['image'];
echo "<tr>
    <td>$rid</td><td>$rate</td><td>$type</td><td>$image</td>
    </tr>";
    }
	echo "</table>";
}
?>