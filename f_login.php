<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <h1>FARMER</h1>
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="f_signupvalid.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                UserName<span class="req">*</span>
              </label>
              <input type="text" name="uname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Number<span class="req">*</span>
              </label>
              <input type="Number"  name="mbl" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              City<span class="req">*</span>
            </label>
            <input type="text" name="cty" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="psw" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="f_loginvalid.php" method="post">
          
           <div class="field-wrap">
            <label>
              UserName<span class="req">*</span>
            </label>
            <input type="text" name="uname"  required autocomplete="off"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="psw" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>

</body>
</html>
