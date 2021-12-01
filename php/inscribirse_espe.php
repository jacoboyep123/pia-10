<?php
session_start();
$id=$_SESSION['id'];
$tarea=$_SESSION['id_tarea'];
$id_user=$_SESSION['id_user'];
echo $id.'<br>';
echo $tarea;
echo $id_user;
try{
require_once "conexion.php";
  $sql="INSERT INTO tareas_usuario(id_usuario, id_tarea, id_psicologo, estado) VALUES(:id, :id_tarea, :id_psicologo, :estado)";
  $consulta = $conexion->prepare($sql);
  $consulta -> execute(array(
    ':id'=>$id_user,
    ':id_tarea' => $tarea,
    ':id_psicologo' => $id,
    ':estado' => 0,
    ));
}
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
header("location:tarea_especifica.php");
?>