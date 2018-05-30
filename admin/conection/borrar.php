<?php 
include("function.php");
$id = $_GET['idCursos'];
editState($tbl,$field,'idCursos',$id);
header("location:../cursos.php");
?>