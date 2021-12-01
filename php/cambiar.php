<?php
session_start();
require_once "conexion.php";

$contra1=$_POST['contra_1'];
$contra2=$_POST['contra_2'];
$id=$_SESSION['id'];

$cnstl="SELECT * FROM registro WHERE id='$id'";
$exec= $conexion -> query ($cnstl);
$data= $exec -> fetch();

if($data['pass']==$contra1){

    try{
    $consulta = $conexion -> prepare( "UPDATE registro SET pass ='$contra2' WHERE id = '$id'");
    $consulta -> execute();
    echo'
        <script type="text/javascript">         
        alert("Contraseña Cambiada Con Exito");         
        window.location.href="../configuracion.html";         
        </script>';
    }

    catch(Exception $e){
    echo 'Error conectando a la base de datos: '. $e->getMessage();
    }

}

else{
    echo
    '
        <script type="text/javascript">         
        alert("La Contraseña Actual No Coincide.");         
        window.location.href="../configuracion.html";         
        </script>';
}
?>