<?php
$databaseHost='localhost';
$databaseName='hotel';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 echo"Connected Successfully";
}
$crat="CREATE TABLE info(
Name varchar(25),
Address varchar(50),
City varchar(25)
)";
if(!mysqli_query($cont,$crat)){
echo"ERROR: ".mysqli_error($cont);
}
else{echo "New table created successfully";}
$inst="INSERT INTO info(name,Address,City)
values('Fariha','Dalainagar','Ctg'),
('Sami','CoxsBazar','Ctg'),
('Dola','Fani','Ctg')";
if(!mysqli_query($cont,$inst)){
echo"ERROR: ".mysqli_error($cont);}
else{echo "Inserted successfully";}
?>