<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/crear_tareas.css?ts=<?=time()?>">
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
$_SESSION['tarea']=$fila["tarea"];
$_SESSION['descripcion']=$fila["descripcion"];
$_SESSION['fecha']=$fila["fecha"];

echo'
<h1>Detalles Tarea:</h1><br>
<div class="xd2">
<h2>Tarea: '.$fila["tarea"].'</h2><br>
<h2>Detalles: '.$fila["descripcion"].'</h2><br>
<h2>Fecha Sugerida: '.$fila["fecha"].'</h2><br>
<a href="editar.php"><button class="boton">Editar</button></a>
<a href="acabar.php"><button class="boton">Eliminar</button></a>
';
?>
<br><br><button onclick="location.href='editar_tareas.php'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</body>
</html>