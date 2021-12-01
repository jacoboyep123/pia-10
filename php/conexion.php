<?php
try{
    $conexion = new PDO('mysql:host=localhost;dbname=pia10',"root","Andresfmejia");
} 
catch(PDOException $e){
    echo "Error".$e->getMessage();
}
?>