<html>
<body>

<?php
include('conection/conection.php');
 
$conn= @mysql_connect($hostname,$username,$password) or die ("Problemas en al conectarse con el servidor");

$db=@mysql_select_db('ponencia',$conn)or die("Problemas en al conectarse con la base");

// Realizar una consulta SQL 

$conn = mysql_query("DELETE FROM cursos where idCursos=".$_POST['idCursos'],$conn);

echo "<br> ha sido borrado " .$_REQUEST['idCursos']; 

/*FALTA INSERTAR EL NOMBRE DE A FOTO DEL EXPOSITOR*/

?>

<br>Registro BORRADO con exito<br>

<!-- sustituir para el servidor>
<a href="http://returnmac.hol.es/ponencia/admin/cursos.php">DEVOLVER A EL FORMULARIO </a>
<!-->

<a href="http://localhost/ponencia/admin/cursos.php">DEVOLVER A LOS CURSOS </a>
<body/>
<html/>