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


/* insertar */
$sql = "INSERT INTO cursos (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/* insertar */




$conn->close();

?>