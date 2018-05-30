<html>
<body>

<?php
include('conection.php');
 
if(isset($_POST['submit'])){
		$field = array("name"=>$_POST['name']);
		$tbl = "cursos";
		insert($tbl,$field);
		
	}



/*FALTA INSERTAR EL NOMBRE DE A FOTO DEL EXPOSITOR*/

?>

<br>Registro insertado con exito<br>

<!-- sustituir para el servidor>
<a href="http://returnmac.hol.es/ponencia/admin/cursos.php">DEVOLVER A EL FORMULARIO </a>
<!-->

<a href="../cursos.php">DEVOLVER A LOS CURSOS </a>

<script type="text/javascript">
window.location="../cursos.php";
</script>
<body/>
<html/>