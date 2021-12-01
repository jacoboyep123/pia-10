<?php
session_start();
include_once"conexion.php";
$id_user=$_POST['id_user'];
try{
	##Actualizar dato de usuario nuevo##
	$consulta = $conexion -> prepare( "UPDATE registro SET confirmado ='1' WHERE id = '$id_user'");
    $consulta -> execute();
    echo'
    <script type="text/javascript">         
    alert("Cuenta Confirmada Con Exito");         
    window.location.href="confirmaciones.php";         
    </script>';
}

catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}
?>