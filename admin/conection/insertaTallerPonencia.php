<html>
<body>

<?php
include('conection.php');
 
$conn= @mysql_connect($hostname,$username,$password) or die ("Problemas en al conectarse con el servidor");

$db=@mysql_select_db('ponencia',$conn)or die("Problemas en al conectarse con la base");

$conn = mysql_query("insert into cursos (tituloTallerPonencia,nombreExpositor,fechaInicio,fechaFin,hora,duracion,tipo,resumen) 
VALUES ('$_POST[titulo]','$_POST[nombreXpo]','$_POST[fechInic]','$_POST[fechFin]','$_POST[horaCurso]','$_POST[duracionCurso]','$_POST[tipoCurso]','$_POST[resumenCurso]')",$conn);

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