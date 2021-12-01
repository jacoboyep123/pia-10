<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../static/css/crear_tareas.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	
	<title>Editar</title>
</head>

<body>
<center>
<h1>Editar</h1>
<div class="xd2">
<form class="xd" method="post" action="edit.php" >
        
        <?php

        session_start();     
        $tarea=$_SESSION['tarea'];
        $descripcion=$_SESSION['descripcion'];

        echo'

        <h2>Nombre De La Tarea: </h2>
        <input type="text" name="tarea" autocomplete="off" placeholder="'.$tarea.'" required><br><br>
        <h2>Descripción Breve: </h2>
        <textarea name="descripcion" class="xdd" placeholder="'.$descripcion.'" required></textarea>
        <h2>Fecha Sugerida: </h2>
        <input type="date" name="fecha" required><br><br>
        <input type="submit" name="Enviar" value="Editar" class="boton"><br><br>'
        
        ?>
      </form>
       <a  onclick="location.href='editar_tareas.php'"><i class="fa fa-arrow-left"></i></a>
      
</div>
</center>
</body>

</html>