<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (width:500px) {
  .column {
    width: 80%;
    
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display:table;
}

.title {
  color: grey;
}

</style>
</head>
<body bgcolor="lightgreen">
<br>
<h1 align="center">Team</h1>
<hr>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="harshit.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Harshit Raj</h2>
        <p class="title">Developer and Desiginer</p>
        <p class="title">Idea Genrator</p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="keshu.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Keshav Kumar</h2>
        <p class="title">Fronthand Developer</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="rahul.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Rahul Pandey</h2>
        <p class="title">Fronthand Deceloper</p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="manish.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Manish Kumar</h2>
        <p class="title">Layout Designer</p>

      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="Atif.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Md. Atif</h2>
        <p class="title">Layout Designer</p>
      

      </div>
    </div>
  </div>
</div>

</body>
</html>
