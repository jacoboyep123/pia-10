<head>
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>MIS TAREAS</h1>
		<p>Has click en alguna para darla por terminada.</p>
		<br>
		<div class="contenedor">
			<br><br>
		<form method="post" action="finalizar.php">
<?php
session_start();
$id=$_SESSION['id'];
include_once"conexion.php";

$consulta="SELECT * FROM tareas_usuario WHERE id_usuario='$id'";
$resultado= $conexion ->query ($consulta);
while ($fila=$resultado->fetch()){
		$id_tarea=$fila["id_tarea"];
		$consulta1="SELECT * FROM tareas WHERE id='$id_tarea'";
		$resultado1= $conexion ->query ($consulta1);
		$linea=$resultado1->fetch();
		if($fila["estado"]==0){
		echo'<input type="submit" name="tarea" class="tareasenproceso" value="'.$linea["tarea"].'"><br><br>';
		}
}
?>
</form>
<button onclick="location.href='../tareasindex.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>