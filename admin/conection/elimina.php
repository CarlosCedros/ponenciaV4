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

/* select registros */
$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
/* select registros */


// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}






$conn->close();

?>