<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['psw'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"farming");
$q="select * from validmerchant where username='$username' && password=$password";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
 $_SESSION["username"]=$username;
 $_SESSION["password"]=$password;
 header('location:http://localhost/farmingAssitant/merchantpage.php');
}
else
{ 
header('location:http://localhost/farmingAssitant/m_login.php');
}
mysqli_close($con);
?>