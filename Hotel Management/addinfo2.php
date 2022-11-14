<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
	/*echo "<a href='addinfo.php'>addroom</a> | <a href='display.php'>view room</a>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Room</title>
    <style>
	body{
	background-color: 	 #ff8566;
	}
        input[type=text],input[type=email],input[type=password]{
            width:100% !important;
        }
        table{
            border: 1px solid rgb(202,207,210);
        }
        form {
            margin: 10% auto 0;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #661400;
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
  background-color:  #661400;
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
  
    
    
    <form method="post" enctype="multipart/form-data">
       <center><h1>Room Information</h1></center>
        <table align="center" border="0">
            <tr>
                <td>Room Id:</td>
                <td><input type="text" name="txtid"></td>
            </tr>
			<tr>
                <td>Rate:</td>
                <td><input type="text" name="txtprice"></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input type="text" name="txtdes"></td>
            </tr>
            
            <tr>
                <td>Room Picture:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Insert" name="btninsert"></td>
            </tr>
        </table>
    </form>
	
    <?php  ?>
  
    <?php
	$query="create table room_type(room_id varchar(30) primary key,rate varchar(30),type varchar(30),image varchar(50))";
	mysqli_query($con,$query);
	
	/* Insert Code Start */
        if(isset($_POST["btninsert"]))   /* Insert button click event */
        {
	    /* Move image into images folder which you have to create in C:\xampp\htdocs\foldername\ */
            move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]); 
			$image1=$_FILES["image"]["tmp_name"];
			echo($image1);
	    $image=$_FILES["image"]["name"];
		echo($image); 
		  $query1="insert into room_type(room_id,rate,type,image) values('".$_POST["txtid"]."','".$_POST["txtprice"]."','".$_POST["txtdes"]."','".$image."')";
            $res = mysqli_query($con,$query1) or die(mysqli_error($con));
            if($res == TRUE)
            {
                echo "<script>alert('Data added successfully..!!')</script>";
            }
            else
            {
                echo "<script>alert('Something getting wrong.Please try again..!')</script>";
            }
        }
	/* Insert Code End */
    ?>
</body>
</html>