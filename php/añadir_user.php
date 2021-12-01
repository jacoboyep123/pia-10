<?php

session_start();
$id=$_SESSION['id'];
$usuario = $_POST['usuario'];

try{

    include "conexion.php";
    $sql= "INSERT INTO pacientes_psicologos (id, id_psicologo, id_paciente) VALUES (NULL, :id, :id_paciente)";
	$consulta = $conexion -> prepare($sql);
	$consulta -> execute(array(

	    ':id' => $id,
	    ':id_paciente' => $usuario
	
	));
}

catch(Exception $e){

    echo 'Error conectando a la base de datos: '.$e->getMessage();

}
echo '
<script type="text/javascript">

alert("Paciente Agregado Con Exito!");
window.location.href="lista_user.php";

</script>';
?>