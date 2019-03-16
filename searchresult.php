
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 10px solid black;
    margin-right: 50px;
    margin-left: 50px;
    margin-bottom: 50px;
    margin-top: 50px;
}
</style>
</head>
<body bgcolor="lightgreen">
<?php
session_start();
if(isset($_SESSION['username2']))
{
  $username2=$_SESSION["username2"];
  $_SESSION["username3"]=$username2;
}
$city=$_POST['city'];
$crop=$_POST['crop'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"farming");
$q="select * from addcrop where city='$city' && crop='$crop'";
$result=mysqli_query($con,$q);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<table>
     	<tr><th>CITY</th><th>CROP<th>PRICE</th><th>MOBILE</th><th>NAME</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>" . $row["city"]. "</td><td>" . $row["crop"]."</td><td>" . $row["price"]."</td><td>" . $row["mobile"]."</td>
       <td>" . $row["name"]. "</td></tr>";
    }
     echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($con);
?>
</body>
</html>