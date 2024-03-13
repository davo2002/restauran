
<?php require_once "vistas/parte_superior.php"?>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user"action="<?php echo base_url().'crea'?>" method="post">
                                <div class="form-group row">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    REQUIRED placeholder="Full Name" name="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    REQUIRED   placeholder="Email Address" name="correo">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword"REQUIRED placeholder="clave" name="clave">
                                    </div>
                                </div>
                                <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                                        </a>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url("assets/admin/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url("admin/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url("assets/admin/js/sb-admin-2.min.js"); ?>"></script>
</body>
<?php require_once "vistas/parte_inferior.php"?>