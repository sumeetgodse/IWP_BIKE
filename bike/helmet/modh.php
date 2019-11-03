<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$stock = mysqli_real_escape_string($link, $_REQUEST['stock']);
 
// Attempt insert query execution
$sql = "UPDATE helmet SET price='$price', stock='$stock' WHERE name='$name'";
if(mysqli_query($link, $sql)){
    echo "Records modified successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>