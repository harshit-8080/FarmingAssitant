<?php
$username=$_POST['uname'];
$password=$_POST['psw'];
$city=$_POST['cty'];
$mobile=$_POST['mbl'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'farming');
$q="insert into validfarmer(username,password,city,mobile)values('$username',$password,'$city',$mobile)";
if(mysqli_query($con,$q)){
header('location:http://localhost/farmingAssitant/f_login.php');
}
else{
	echo("error");
}
mysqli_close($con);
?>