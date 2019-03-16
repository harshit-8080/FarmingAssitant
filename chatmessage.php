<?php
$username=$_POST['msg'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"farming");
$q="insert into message(msg)values('$username')";
if(mysqli_query($con,$q))
{
echo("message submited");
}
else{
	echo("error");
}
mysqli_close($con);
?>