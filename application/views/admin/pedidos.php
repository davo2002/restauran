


<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Página de Pedidos</h1>
    <h1>Ventas</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>                             
                                <th>Nombres</th>                                  
                                <th>Apellidos</th>
                                <th>Direccion</th>                                 
                                <th>Domicilio||Fisico</th>  
                                <th>Observation</th> 
                                <th>Telephone</th>                                
                                <th>correo</th>                               
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php if(!empty($persona)):?>
                                            <?php foreach($persona as $c):?>
                                        <tr>
                                            
                                        <td><?php echo $c->id;?></td>
                                <td><?php echo $c->nombres;?></td>
                                <td><?php echo $c->apellidos;?></td>
                                <td><?php echo $c->direccion;?></td>
                                <td><?php echo $c->dm;?></td>  
                                <td><?php echo $c->	observaciones;?></td>  
                                <td><?php echo $c->correo;?></td> 
                                <td><?php echo $c->telefono;?></td>
                                            <a type='submit' class='btn btn-danger' href='<?php echo base_url().'gestionar_productos/eliminar_productos1/'.$c->id;?>'>eliminar</a>
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
<?php require_once "vistas/parte_inferior.php"?>