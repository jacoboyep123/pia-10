<?php
session_start();
$usuario=$_POST['nombres'];
$contrasena=$_POST['pass'];
$_SESSION['usuario']=$usuario;
$_SESSION['contra']=$contrasena;

require_once "conexion.php";
$consulta= "SELECT * FROM registro";
$resultado= $conexion ->query ($consulta);

while ($data = $resultado -> fetch()){

    if($usuario==$data["correo"] && $contrasena==$data["pass"]){    
        $confirmacion=1;
        $_SESSION['id']=$data["id"];
        
        if($data["tipouser"]=="psicologo"){
            header ("location:../perfilp.html");
        }

        else{
            if($data["confirmado"]==1){
                if($data["nuevo"]==1){
                    header("location:../formulario.html");
                }

                else{
                header ("location:../perfil.html");
                }
            }
            else{
                
                echo'<script type="text/javascript">         
                alert("Cuenta No Verficada, Espera Hasta Que Un Psicologo Valide Tu Cuenta.");         
                window.location.href="../index.html";         
                </script>';

                
            }
        }
    }
}
if($confirmacion!=1){
    echo'<script type="text/javascript">         
                alert("Las Credenciales No Coinciden");         
                window.location.href="../index.html";         
                </script>';
}
?>