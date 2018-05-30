<?php
    $servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="ponencia";
	//$usertable="your_tablename";
	//$yourfield = "your_field"; 
   // Create connection
$conn = new mysqli($servername, $username, $password);
  mysqli_query($conn,"SELECT * FROM cursos");

// Check connection
if ($conn->connect_error) {
    die("conexión fallida: " . $conn->connect_error);
}
//echo "conexión satisfactoria";

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}





$conn->close();

?>