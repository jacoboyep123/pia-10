<?php
session_start();
include_once "conexion.php";

$id_user=$_SESSION["id"];
$resultado = $_POST['preg1'] + $_POST['preg2'] + $_POST['preg3'] + $_POST['preg4'] + $_POST['preg5']  +$_POST['preg6'] + $_POST['preg7'] + $_POST['preg8'] + $_POST['preg9'] + $_POST['preg10'] + $_POST['preg11'] + $_POST['preg12'];

try{
	
    $sql= "UPDATE formulario set resultado =:resultado WHERE id_usuario = $id_user";
	$consulta = $conexion -> prepare($sql);
	$consulta -> execute(array(
		':resultado' => $resultado
	));


}

catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}
try{
	##Actualizar dato de usuario nuevo##
	$consulta = $conexion -> prepare( "UPDATE registro SET nuevo ='0' WHERE id = '$id_user'");
    $consulta -> execute();
    header("location: ../perfil.html");
}

catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}
?>