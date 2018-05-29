<?php
    $hostname="127.0.0.1";
	$username="root";
	$password="12345678";
	//$dbname="ponencia";
	//$usertable="your_tablename";
	//$yourfield = "your_field";
// Conectando, seleccionando la base de datos

// Create connection
/*$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/


/*function db_query($query) {
    $connection = mysqli_connect("127.0.0.1","root","","ponencia");
    $result = mysqli_query($connection,$query);

    return $result;
}
 function insert($tblname,$form_data){
    $fields = array_keys($form_data);
    $sql="INSERT INTO ".$tblname."(".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";
    
    return db_query($sql);

}
function delete($tblname,$field_id,$id){

    $sql = "delete from ".$tblname." where ".$field_id."=".$id."";
    
    return db_query($sql);
}
function edit($tblname,$form_data,$field_id,$id){
    $sql = "UPDATE ".$tblname." SET ";
    $data = array();

    foreach($form_data as $column=>$value){

        $data[] =$column."="."'".$value."'";

    }
    $sql .= implode(',',$data);
    $sql.=" where ".$field_id." = ".$id."";
    return db_query($sql); 
}
function select_id($tblname,$field_name,$field_id){
    $sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
    $db=db_query($sql);
    $GLOBALS['row'] = mysqli_fetch_object($db);

    return $sql;

}


/*
$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "idCursos: " . $row["idCursos"]. " - Name: " . $row["fechaInicio"]. " " . $row["fechaFin"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

$conn = @mysql_connect($hostname,$username,$password) or die ("Problemas al conectarse con el servidor");

  $db = @mysql_select_db('ponencia',$conn)or die("Problemas en al conectarse con la base");

  $conn = mysql_query("SELECT * FROM cursos",$conn);

?>