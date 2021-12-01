<head>
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>TAREAS DISPONIBLES</h1>
		<br>
		<div class="contenedor">
			<br><br>
		<form method="post" action="detalles.php">
<?php
session_start();
$id=$_SESSION['id'];
include_once"conexion.php";

$con="SELECT * FROM tareas";
$resul= $conexion ->query ($con);

	while ($fila=$resul->fetch()){

		$id_tarea=$fila["id"];
		$consulta="SELECT * FROM tareas_usuario WHERE id_tarea='$id_tarea'";
		$resultado= $conexion ->query ($consulta);
		$pl=0;
		while($linea=$resultado->fetch()){
			if($linea["id_usuario"]==$_SESSION['id']){
				$pl=1;
				echo'';
		}
		}
		if($pl==0){
			echo'<input type="submit" name="tarea" class="tareas" value="'.$fila["tarea"].'"><br><br>';
	}
}
?>
</form>
<button onclick="location.href='../tareasindex.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>