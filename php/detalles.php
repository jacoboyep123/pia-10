<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>Detalles</title>
</head>
<body>
	<?php
session_start();
$tarea=$_POST["tarea"];
include_once"conexion.php";
$con="SELECT * FROM tareas WHERE tarea ='$tarea'";
$resul= $conexion ->query ($con);
$fila=$resul->fetch();
$_SESSION['id_tarea']=$fila["id"];
$_SESSION['id_psicologo']=$fila["id_psicologo"];
echo'<center><h1>Detalles Tarea:</h1></center>
<div class="contenedor">
<h2>Tarea: '.$fila["tarea"].'</h2><br>
<h2>Detalles: '.$fila["descripcion"].'</h2><br>
<h2>Fecha Sugerida: '.$fila["fecha"].'</h2><br>
<a href="inscribirse.php"><button class="boton">Inscribirse</button></a>';
?>
<br><br>
<button onclick="location.href='tareas.php'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</body>
</html>
