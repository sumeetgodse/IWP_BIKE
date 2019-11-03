
<!DOCTYPE html>
<html>
<head>
  <title>Moto Guzzi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
table, td, th {
  border: 2px solid black;
    text-align:center;

  border-radius:5px
}

table {
  border-collapse: collapse;
  width: 60%;
}

th {
  height: 80px;
} 
tr {
  height: 50px;
} 
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
  <li><a href="contact.html">Contact</a></li>
  <li><a href="register.php">Login</a></li>
  <li><a href="home.html">Home</a></li>
</ul>
<?php
$host="localhost";
$user="root";
$password="";
$database="registration";

// Create connection
$conn = new mysqli($host,$user,$password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, price, stock FROM jacket";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
<br><br>
<table  align=center>
		<th>Name<th>Price<th>Stock
<?php
	while($row = $result->fetch_assoc()) {
?>
		<tr>
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['price']; ?></td> 
            <td><?php echo $row['stock']; ?></td> 
        </tr>
<?php	
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>