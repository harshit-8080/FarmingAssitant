<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display:flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border:1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  backgound-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size:18px;
  color: black;
  display: block;
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
</head>
<body>
<H1>State-wise Analysis Of Farming in India.</H1>
<hr>
<p>Search Your State</p>

<div class="row">
  <div class="left" style="background-color:lightgreen;">
    <h2>STATES</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Enter your state">
    <ul id="myMenu">
 <li><a href="andhra.php">Andhra Pradesh</a><br>
  <li><a href="arunachal.php">Arunachal Pradesh</a><br>
<li><a href="assam.php">Assam</a><br>
<li><a href="bihar.php">Bihar</a><br>
<li><a href="chhattisgarh.php">Chhattisgarh</a><br>
<li><a href="goa.php">Goa</a><br>
<li><a href="gujrat.php">Gujarat</a><br>
<li><a href="haryana.php">Haryana</a><br>
<li><a href="himachalpradesh.php">Himachal Pradesh</a><br>
<li><a href="jammuandkashmir.php">Jammu and Kashmir</a><br>
<li><a href="jharkhand.php">Jharkhand</a><br>
<li><a href="karnataka.php">Karnataka</a><br>
  <li><a href="kerala.php">Kerala</a><br>
<li><a href="madhyapradesh.php">Madhya Pradesh</a><br>
<li><a href="manipur.php">Manipur</a><br>
<li><a href="mizoram.php">Mizoram</a><br>
<li><a href="meghalaya.php">Meghalaya</a><br>
 <li><a href="nagaland.php">Nagaland</a><br>
 
<li><a href="odisha.php">Odisha</a><br>
<li><a href="punjab.php">Punjab</a><br>
<li><a href="sikkim.php">Sikkim</a><br>


<li><a href="rajasthan.php">Rajasthan</a><br>
<li><a href="tamilnadu.php">Tamil Nadu</a><br>
<li><a href="tripura.php">Tripura</a><br>
  <li><a href="up.php">Uttar Pradesh</a><br>
<li><a href="uttarakhand.php">Uttarakhand</a><br>   
<li><a href="westbangal.php">Westbangal</a><br>

</ul>
  </div>
  
  <div class="right" style="background-color:#ddd;">
    <img src="map.jpg" width="800px" height="800px">
  </div>
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
