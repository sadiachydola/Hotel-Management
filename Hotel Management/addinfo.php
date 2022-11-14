<?php
    $con = new mysqli("localhost","root","","info");   /* Connection code(Connect with database) */
	/*echo "<a href='addinfo.php'>addroom</a> | <a href='display.php'>view room</a>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registartion</title>
    <style>
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
  <li><a href="display.php">View Product</a></li>
  <li><a href="Adminlog.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Userlogin.php">Admin</a></li>
</ul><br>
  
    
    
    <form method="post" enctype="multipart/form-data">
       <center><h1>Information</h1></center>
        <table align="center" border="0">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="txtfname"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="txtuemail"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="txtpassword"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="rdogender" value="Male">Male<input type="radio" name="rdogender" value="Female">Female</td>
            </tr>
			            <tr>
                <td>Hobbies</td>
                <td><input type="checkbox" name="chkhobby[]" value="Cricket">Cricket
                <input type="checkbox" name="chkhobby[]" value="Hocky">Hocky
                <input type="checkbox" name="chkhobby[]" value="Singing">Singing</td>
            </tr>
      
                <td>Picture:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Insert" name="btninsert"></td>
            </tr>
        </table>
    </form>
	
    <?php  ?>
  
    <?php
	/* Insert Code Start */
        if(isset($_POST["btninsert"]))   /* Insert button click event */
        {
	    /* Move image into images folder which you have to create in C:\xampp\htdocs\foldername\ */
            move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]); 
			$image1=$_FILES["image"]["tmp_name"];
			echo($image1);
	    $image=$_FILES["image"]["name"];
		echo($image);
	    $checkbox1=$_POST['chkhobby'];  
	    $chk="";  
	    foreach($checkbox1 as $chk1)  
	      {  
		 if($chk == "")
		    {
		       $chk .= $chk1;
		    }
		 else{
		       $chk .= ",".$chk1;  
		     }  
	      }  
		  $query1="insert into tblregistration(RegFullName,RegEmail,RegPassword,RegGender,RegImage) values('".$_POST["txtfname"]."','".$_POST["txtuemail"]."','".$_POST["txtpassword"]."','".$_POST["rdogender"]."','".$chk."','".$image."')";
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