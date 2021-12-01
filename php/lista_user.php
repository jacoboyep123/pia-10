<head>
	 <link rel="stylesheet" type="text/css" href="../static/css/tareas.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>Escoger Pacientes</h1>
		<br>
		<div class="contenedor">
			<br><br>
		<form method="post" action="añadir_user.php">
		<select name="usuario" required>
<?php
include_once"conexion.php";
session_start();

$id=$_SESSION['id'];

##consulta 1##

$con="SELECT * FROM registro";
$resul= $conexion ->query ($con);
	while ($fila=$resul->fetch()){

		$id_user=$fila["id"];
		$ver=0;

		##consulta 2##

		$consulta="SELECT * FROM pacientes_psicologos WHERE id_paciente = '$id_user'";
		$resultado= $conexion ->query($consulta);

		while ($pacientes = $resultado->fetch()){
			if($pacientes["id_paciente"] == $fila["id"]){
				$ver=1;
			}
		}
		if($ver==0 && $fila["id"] != $id){
			echo'
				<option value="'.$fila["id"].'">'.$fila["nombres"].' '.$fila["apellidos"].'</option>';
		}
	}
?>
</select>
<br><br><input type="submit" name="submit" value="Enviar" class="boton">
</form>
<button onclick="location.href='lista_pacientes.php'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>