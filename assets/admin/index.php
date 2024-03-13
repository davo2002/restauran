<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Articulos/Ventas</h1>
    
    
    
    
        
    

    <br>  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>producto</th>                                
                                <th>Precio</th>                                  
                                <th>Imagen</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                                include("conexion.php");
                                $query="SELECT * FROM productos";
                                $resultado=$conexion->query($query);
                                while($row=$resultado->fetch_assoc()){
                            ?>
                            <tr>
                               <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['producto'] ?></td>
                                <td><?php echo $row['precio'] ?></td>     
                                <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" /></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>  
                    </table>                    
                </div>
            </div>
        </div>  
    </div>    
        
    <!--Modal para CRUD-->
   
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>