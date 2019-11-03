<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Moto Guzzi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="border:2px solid black;text-align:center;width:1330px;border-radius:5px;background-color:red;color:white">
<h2>MOTO GUZZI</h2>
<h3>PREMIUM BIKE ACCESSORIES</h3>
</div>
<br>
<ul>
  <img src="logo.jpg" height=100px width=150px style="margin-left:180px;margin-top:3px" >
  <li><a href="store.html">Store</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="">Login</a></li>
  <li><a href="home.html">Home</a></li>
</ul>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>