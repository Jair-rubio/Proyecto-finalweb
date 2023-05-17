<?php

$conexion = new mysqli ("localhost","id20249396_final","nmd@SfE1dLm$","id20249396_proyecto");  

if($conexion){
    echo "la gestion fue exitosa !!";
  /*  header ("Location: Contacto.php");*/

} 

else{
    echo "Fallo la gestion";
}

?>