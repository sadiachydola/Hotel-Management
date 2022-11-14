<?php
    $con = new mysqli("localhost","root","","hotel");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
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
  <li><a href="display3.php">View Product</a></li>
  <li><a href="Adminlog.php">Sign in</a></li>
  <li><a href="userreg.php">Sign Up</a></li>
  <li><a href="Userlogin.php">Admin</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul><br>
   <?php
   /* Start Update Code */
      if(isset($_REQUEST["btnupdate"]))   /* Update button click event.. */
      {
            /*$checkbox1=$_REQUEST['chkhobby'];  
            $chk="";  
            foreach($checkbox1 as $chk1)  
            {  
              if($chk == "")
              {
                $chk .= $chk1;
              }
              else
				{
             	$chk .= ",".$chk1;  
              }	  
            }*/  
            $image="";
            if($_FILES["profile"]["name"]=="")
            {
                $image=$_REQUEST["txtimg"];
            }	
            else
            {
                unlink("images//".$_REQUEST["txtimg"]);
                move_uploaded_file($_FILES["profile"]["tmp_name"],"images/".$_FILES["profile"]["name"]);
                $image=$_FILES["profile"]["name"];
            }	
            $data = mysqli_query($con,"update room_type set rate='".$_REQUEST["txtprice"]."',type='".$_REQUEST["txtdes"]."',image='".$image."' where room_type='".$_REQUEST["txtid"]."'");
            if($data == TRUE)
            {
                echo "<script>alert('Data updated successfully..!');window.location='AdminDelete.php';</script>";   
            }
            else
            {
                echo "<script>alert('Error while updating..!!')</script>";
            }
        }
  
        if(isset($_REQUEST["btncancel"]))   /* Cancel button click event.. */
        {
            echo "<script>window.location='AdminDelete.php';</script>";   
        }
	/* End update code */
   ?>
  
    <?php
        /* Click on edit from display page check variable that you send from that page and fetch data of that variable. */
	if(isset($_REQUEST["isEdit"]))
        {
            $rs = mysqli_query($con,"select * from room_type where room_id='".$_REQUEST["isEdit"]."'") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($rs))
            {
                /*$ch1 = $ch2 = $ch3 = "";
		  $myArray = explode(',', $row["RegHobbies"]);
		  foreach($myArray as $chk)
		  {
		    if($chk == "Cricket")
		       {
			  $ch1 = 'checked';
		       }  
		    if($chk == "Hocky")
		       {
			  $ch2 = 'checked';
		       }
		    if($chk == "Singing")
		       {
			  $ch3 = 'checked';
		       }					
	     }*/
    ?>
       
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="txtimg" value="<?php echo $row["image"]; ?>">
          <input type="hidden" name="txtid" value="<?php echo $row["room_id"]; ?>">
           <center><h1>Update Product Information</h1></center>
            <table align="center" border="0">
                
                
                <tr>
                    <td>Price:</td>
                    <td><input type="text" name="txtprice" value="<?php echo $row["rate"]; ?>"></td>
                </tr>
				<tr>
                    <td>Description:</td>
                    <td><input type="text" name="txtdes" value="<?php echo $row["type"]; ?>"></td>
                </tr>
                <tr>
                    <td>Picture:</td>
                    <td><input type="file" name="profile"><br/><img src="images/<?php echo $row["image"]; ?>" alt="User Profile" height="100" width="100"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Update" name="btnupdate"> <input type="submit" value="Cancel" name="btncancel"></td>
                </tr>
            </table>
        </form>
    <?php
            }
        }
		else
		{
    ?>
    
    <form method="post" enctype="multipart/form-data">
       <center><h1>Product Information</h1></center>
        <table align="center" border="0">
            <tr>
                <td>Product Id:</td>
                <td><input type="text" name="txtid"></td>
            </tr>
			<tr>
                <td>Product Name:</td>
                <td><input type="text" name="txtfname"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="text" name="txtprice"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="txtdes"></td>
            </tr>
            
            <tr>
                <td>Product Picture:</td>
                <td><input type="file" name="profile"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Insert" name="btninsert"></td>
            </tr>
        </table>
    </form>
    <?php 
	} 
	?>
  
    <?php
	/* Insert Code Start */
        if(isset($_POST["btninsert"]))   /* Insert button click event */
        {
	    /* Move image into images folder which you have to create in C:\xampp\htdocs\foldername\ */
            move_uploaded_file($_FILES["profile"]["tmp_name"],"images/".$_FILES["profile"]["name"]); 
			$image1=$_FILES["profile"]["tmp_name"];
			echo($image1);
	    $image=$_FILES["profile"]["name"];
		echo($image); 
		  $query1="insert into productinfo(Id,Name,Price,Description,Profile) values('".$_POST["txtid"]."','".$_POST["txtfname"]."','".$_POST["txtprice"]."','".$_POST["txtdes"]."','".$image."')";
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
