<?php require_once "vistas/parte_superior.php"?>
    <center>
    <form action= "<?php echo base_url("envi"); ?>" method='post'>


        <input type="text" class="form-control form-control-user" REQUIRED name ='producto'
         placeholder="producto">

        <input type="number" class="form-control form-control-user"REQUIRED name ='precio'
        placeholder="precio">

        <input type="file" class="form-control form-control-user"REQUIRED name ='imagen'
           placeholder="imagen">
           <input type="submit" class="btn btn-primary btn-user btn-block">
             <hr>
        </form>
    </center>


<?php require_once "vistas/parte_inferior.php"?>