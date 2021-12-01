<?php
session_start();
try {
  $tarea=$_POST['tarea'];
  $descrip=$_POST['descripcion'];
  $fecha=$_POST['fecha'];
  $id=$_SESSION['id'];
  require_once "conexion.php";
  $sql="INSERT INTO tareas(id, id_psicologo, tarea, descripcion, fecha) VALUES(NULL,:id, :tarea, :descripcion, :fecha)";
  $consulta = $conexion->prepare($sql);
  $consulta -> execute(array(
    ':id'=>$id,
    ':tarea' => $tarea,
    ':descripcion' => $descrip,
    ':fecha'=>$fecha
    ));
}
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
$consulta = "SELECT * FROM tareas WHERE tarea = '$tarea'";
$resultado = $conexion ->query($consulta);
$data = $resultado->fetch();

$_SESSION['id_tarea']=$data["id"];
header("location:inscribirse_espe.php");
?>