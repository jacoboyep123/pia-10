<head>
	 <link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>Escoge El Paciente</h1>
		<br>
		<div class="contenedor">
			<br><br>
		<form method="post" action="crear_espe.php">
		<select name="usuario">
<?php
include_once"conexion.php";
session_start();

$id=$_SESSION['id'];

##consulta 1##

$consulta="SELECT * FROM pacientes_psicologos WHERE id_psicologo = '$id'";
$resultado= $conexion ->query($consulta);
while ($data = $resultado->fetch()){
	$id_paciente=$data["id_paciente"];
	$cons="SELECT * FROM registro WHERE id='$id_paciente'";
	$res= $conexion ->query($cons);
	$paciente_data= $res -> fetch();
	echo'
	<option value="'.$paciente_data["id"].'">'.$paciente_data["nombres"].' '.$paciente_data["apellidos"].'</option>';
	}
?>
</select>
<br><br><input type="submit" name="submit" value="Enviar" class="boton">
</form>
<button onclick="location.href='../crear_tipo.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>