<!DOCTYPE html>
<html>
<head>
	<title>How to Design Login & Registration Form Transition</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
    <form action="Login Data.php" method="post">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit" type="submit" name="login">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>
</form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>


      <form action="Registration Data.php" method="post">
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="uname">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="uemail">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="upass">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="upassc">
        </label> 
		<label>
          <span>D.O.B.</span>
          <input type="date"  name="udob">
        </label>
		<label>
          <span>Mobile</span>
          <input type="text" name="umob">
        </label>
		<label>
			<span>Address</span>
			<textarea name="uadd"></textarea>
		</label>
        <button type="submit" class="submit" name="reg">Sign Up Now</button>
      </div>

        </form>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
