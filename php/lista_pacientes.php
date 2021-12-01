<head>
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>Tus Pacientes</h1>
		<br>
		<div class="contenedor">
			<br><br>
			<center>
			<table >
<?php
session_start();
include_once"conexion.php";

$id=$_SESSION['id'];

$con="SELECT * FROM pacientes_psicologos WHERE id_psicologo ='$id'";
$resul= $conexion ->query ($con);

	while ($fila=$resul->fetch()){
		
		$id_paciente=$fila["id_paciente"];
		
		$consulta="SELECT * FROM registro WHERE id ='$id_paciente'";
		$resultado= $conexion ->query ($consulta);
		$paciente=$resultado ->fetch();

		$consulta1="SELECT * FROM formulario WHERE id_usuario ='$id_paciente'";
		$resultado1= $conexion ->query ($consulta1);
		$paciente1=$resultado1 ->fetch();

		echo'<tr>
		<td class="tabla">
		<p>'.ucwords($paciente["nombres"]).' '.ucwords($paciente["apellidos"]).'</p>
		</td>
		<td class="tabla">
		<p>
		'.$paciente1["resultado"].'
		</p>
		</td>
		</tr>';
	}

?>

</table>
</center>
<br>
<a href="lista_user.php"><button class="boton">Añadir Pacientes</button></a>
<br><br>
<button  onclick="location.href='../perfilp.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>