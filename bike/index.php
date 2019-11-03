<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	a{text-decoration:none}
	</style>
</head>
<body>
<div style="border:2px solid black;text-align:center;width:1345px;border-radius:5px;background-color:red;color:white">
<h2>MOTO GUZZI</h2><h3>PREMIUM BIKE ACCESSORIES</h3>
</div>
<br>
<ul>
  <img src="logo.jpg" height=100px width=150px style="margin-left:180px;margin-top:3px" >
  <li><a href="store.html">Store</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Login</a></li>
  <li><a href="home.html">Home</a></li>
</ul>
<div class="header">
	<h2>Admin Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<h2>Jackets:-</h2><a href="jacket/addj.html"><h3>Add |</a> <a href="jacket/modj.html">Modify |</a> <a href="jacket/delj.html">Delete</h3></a>
		<h2>Shoes:-</h2><a href="shoes/adds.html"><h3>Add |</a> <a href="shoes/mods.html">Modify |</a> <a href="shoes/dels.html">Delete</h3></a>
		<h2>Helmets:-</h2><a href="helmet/addh.html"><h3>Add |</a> <a href="helmet/modh.html">Modify |</a> <a href="helmet/delh.html">Delete</h3></a>
    	<p> <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>