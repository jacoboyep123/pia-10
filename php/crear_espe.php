<?php
session_start();
$_SESSION['id_user']=$_POST['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../static/css/crear_tareas.css?ts=<?=time()?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	
	<title>Crear_Tareas</title>
</head>
<body>
<h1>Crear Tareas</h1>
<div class="xd2">
<form class="xd" method="post" action="creartareas_espe.php" >
        <h2>Nombre De La Tarea: </h2>
        <input type="text" name="tarea" autocomplete="off"><br><br>
        <h2>Descripción Breve: </h2>
        <textarea name="descripcion" class="xdd"></textarea>
        <h2>Fecha Sugerida: </h2>
        <input type="date" name="fecha"><br><br>
        <input type="submit" name="Enviar" value="Enviar" class="boton"><br><br>
        </form>
        <button onclick="location.href='../index_crear.html'" class="flecha"><i class="fa fa-arrow-left"></i></button>  
</div>
</body>
</html>