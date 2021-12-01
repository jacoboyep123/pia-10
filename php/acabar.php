<?php
session_start();
$tarea=$_SESSION['id_tarea'];
try{
require_once "conexion.php";
  $consulta="DELETE FROM tareas WHERE id = $tarea";
  $resul= $conexion ->query ($consulta);
  header('location:editar_tareas.php');
}
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>