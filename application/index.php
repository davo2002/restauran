<?php
    require_once "config/database.php";
     require_once "controllers/productos.php";
     $control= new ProductosController;
     $control->index(); 

?>