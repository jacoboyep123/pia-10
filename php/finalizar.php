<?php
session_start();
try {
require_once "conexion.php";
$tarea=$_POST["tarea"];
$consulta="SELECT*FROM tareas WHERE tarea='$tarea'";
$resultado= $conexion ->query ($consulta);
$fila=$resultado->fetch();
$id_tarea=$fila["id"];
    $consulta = $conexion -> prepare( "UPDATE tareas_usuario SET estado ='1' WHERE id_tarea = '$id_tarea'");
    $consulta -> execute();
    header("location:mistareas.php");
  }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>
