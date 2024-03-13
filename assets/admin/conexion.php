<?php
    $conexion = new mysqli("localhost","root","","restaurante");
    if($conexion){
    }else {
        
        echo "algo salio mal, no vas a poder subir informacion a la base de datos";
    }
    
?>