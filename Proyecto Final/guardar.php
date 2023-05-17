<?php
include("abr.php");

$nombre =$_POST ['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];




$consulta = "INSERT INTO Contacto (nombre, telefono, correo, mensaje) VALUES ('$nombre','$telefono','$correo','$mensaje')";

if ($conexion -> query ($consulta)=== TRUE){
    header("Location: index.php");
}
else{
    echo "Error: ". $consulta. "<br>". $conexion -> error;
}

$conexion-> close();

?>

