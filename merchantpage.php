
<?php
session_start();
if(isset($_SESSION['username']))
{
  $username=$_SESSION["username"];
}
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"farming");
$sql = "SELECT city,mobile FROM validmerchant where username='$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $mobile= $row["mobile"];
        $city= $row["city"];
        "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
  <title>merchantPage</title>
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 10px;
  text-align: center;
  font-family: arial;
  height: 1000%;
}

.price {
  color: grey;
  font-size: 22px;
}
.card button:hover {
  opacity: 0.7;
}
.search
{
  padding-top: 100px;
  position: absolute;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 30px;
  width: 380px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body bgcolor="lightgreen">
  <h2 style="text-align:center">WELCOME TO YOUR HOME PAGE</h2>
  <hr>

<div class="card" style="background-color: white">
  <img src="merchant.jpg" style="width:100%"><hr>
  <h1><?php echo $username ?></h1><hr>
  <p><?php  echo $mobile ?></p><hr>
  <p><?php echo $city ?></p><hr>
</div>
<button class="open-button" onclick="openForm()">BUY CROPS</button>

<div class="form-popup" id="myForm">
  <form action="searchresult.php" method="POST" class="form-container">
    <h1>CROP DETAIL</h1>

    <label for="email"><b>City</b></label>
    <input type="text" placeholder="Enter City" required autocomplete="off" name="city" required>

    <label for="psw"><b>Crop</b></label>
    <input type="text" placeholder="Enter Crop"  required autocomplete="off" name="crop" required>

    <button type="submit" class="btn">Search Crop</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
