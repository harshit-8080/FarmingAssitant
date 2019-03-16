<?php
$city=$_POST['city'];
$crop=$_POST['crop'];
$mobile=$_POST['mobile'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"farming");
$q="insert into addcrop(city,crop,mobile,name,price,quantity)values('$city','$crop',$mobile,'$name',$price,$quantity)";
if(mysqli_query($con,$q))
{
	echo("Succesfully Added");
}
else{
	echo "error";
	}





mysqli_close($con);
?>