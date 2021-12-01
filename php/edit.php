<?php
session_start();
$id=$_SESSION["id_tarea"];
$tarea=$_POST["tarea"];
$descripcion=$_POST["descripcion"];
$fecha=$_POST["fecha"];

try {

require_once "conexion.php";
$consulta = $conexion -> prepare( "UPDATE tareas SET tarea ='$tarea', descripcion ='$descripcion', fecha = '$fecha' WHERE id = '$id'");
$consulta -> execute();
header("location:editar_tareas.php");
  }

catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}

?>
