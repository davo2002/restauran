<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Productos</h1>
    <a class="btn btn-primary" href="<?php echo base_url("mas"); ?>">Cargar Productos</a>
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                                    <tbody>
                                    <?php if(!empty($productos)):?>
                                            <?php foreach($productos as $c):?>
                                        <tr>
                                            
                                            <td><?php echo $c->id;?></td>
                                            <td><?php echo $c->producto;?></td>
                                            <td><?php echo $c->precio;?></td>
                                            <td><img src="<?php echo base_url().'/assets/archivos/'.$c->imagen;?>" width="80" height='60'></td>
                                            <td>
                                            <a type='submit' class='btn btn-danger' href='<?php echo base_url().'gestionar_productos/eliminar_productos/'.$c->id;?>'>eliminar</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                            <?php endif;?>
                                    </tbody>
                    </table>                    
                </div>
            </div>
        </div>  
    </div>    
        
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>