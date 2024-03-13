<?php
    include ("conexion.php");
    $producto;
    $precio;
    $image;
    if(isset($_POST['producto'])){
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    }
    $query="INSERT INTO productos(producto, precio, imagen) VALUES ('$producto','$precio','$imagen')";
    $resultado = $conexion -> query($query);
    if($resultado){
        echo "Ha sido registrado con exito";
        
    }else{
        echo "¡Oh no!, hubo un error al registrar el producto";
    }
?>
<form action="index.php" >
    <input type="submit"  value="Volver al menú"/>
</form>