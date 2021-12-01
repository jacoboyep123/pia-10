<head>
	<link rel="stylesheet" type="text/css" href="../static/css/tareas.css?ts=<?=time()?>">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<br>
	<center>
		<h1>Confirmaciones</h1>
		<div class="contenedor">
			<br><br>
		<form method="post" action="confirmacion.php">
			<center>
			<table cellpadding="5px" cellspacing="8px" width="50%">
<?php
session_start();
$id=$_SESSION['id'];
include_once"conexion.php";

$con="SELECT * FROM registro WHERE confirmado='0'";
$resul= $conexion ->query ($con);

while ($fila=$resul->fetch()){
	if($fila["id"]!=$id){
		echo'<tr><td><center><p>'.ucwords($fila["nombres"]).' '.ucwords($fila["apellidos"]).'</p></center></td><td><input type="submit" name="id_user" class="vacio" value="'.$fila["id"].'"></td></tr>';
	}
}
?>
</table>
</center><br>
</form>
<button onclick="location.href='../perfilp.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>
</div>
</center>
</body>