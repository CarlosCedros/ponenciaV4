<?php
    $servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="ponencia";
	//$usertable="your_tablename";
	//$yourfield = "your_field"; 
   // Create connection
$conn = new mysqli($servername, $username, $password);
  mysqli_query($conn,"select * from cursos");

// Check connection
if ($conn->connect_error) {
    die("conexión fallida: " . $conn->connect_error);
}
//echo "conexión satisfactoria";



//$conn->close();

?>