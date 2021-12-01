<head>
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>TAREAS DISPONIBLES</h1>
		<br>
		<div class="contenedor">
			<br><br>
		<form method="post" action="detalles_edit.php">
<?php
session_start();
$id=$_SESSION['id'];
include_once"conexion.php";

$con="SELECT * FROM tareas";
$resul= $conexion ->query ($con);

	while ($fila=$resul->fetch()){
		echo'<input type="submit" name="tarea" class="tareas" value="'.$fila["tarea"].'"><br><br>';
	}

?>
</form>
<button onclick="location.href='../index_crear.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>