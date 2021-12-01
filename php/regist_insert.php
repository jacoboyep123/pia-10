<?php
require_once "conexion.php";
$nombre= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$pass= $_POST['pass'];
$tipouser= $_POST['tipouser'];
$correo= $_POST['correo'];

try{

	$sql="INSERT INTO registro (id, nombres, apellidos, pass, tipouser, correo) VALUES(NULL, :nombres, :apellidos, :pass, :tipouser, :correo)";

	$consulta = $conexion -> prepare($sql);
	$consulta -> execute(array(

	    ':nombres' => $nombre,
	    ':apellidos' => $apellidos,
	    ':pass' => $pass,
	    ':tipouser' => $tipouser,
	    ':correo' => $correo
	));
}
catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}

$cnslt="SELECT * FROM registro WHERE correo = '$correo' and pass = '$pass'";
$exec= $conexion -> query($cnslt);
$dict= $exec -> fetch();

$id_user=$dict["id"];

try{

	$sql1="INSERT INTO formulario (id_usuario, resultado) VALUES(:id_user, :resultado)";

	$consulta1 = $conexion -> prepare($sql1);
	$consulta1 -> execute(array(

	    ':id_user' => $id_user,
	    ':resultado' => 0
	));
	header('location: ../index.html');
}
catch(Exception $e){
    echo 'Error conectando a la base de datos: '.$e->getMessage();
}
?>