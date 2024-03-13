<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <title>Restaurantly Bootstrap Template - Inner Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url("assets/redireccion\assets/img/favicon.png"); ?>" rel="icon">
  <link href="<?php echo base_url("assets/redireccion\assets/img/apple-touch-icon.png"); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/animate.css/animate.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/aos/aos.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/bootstrap-icons/bootstrap-icons.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/boxicons/css/boxicons.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/redireccion\assets/vendor/glightbox/css/glightbox.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/swiper/swiper-bundle.min.css"); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url("assets/redireccion\assets/css/style.css"); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i><script>
                                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                                    var f=new Date();                                    
                                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                    </script>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="pag">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="pag">Home</a></li>
          <li><a class="nav-link scrollto" href="session">Iniciar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0">
              <span class="mr-2">
                <a href="pag">Home <i class="fa fa-chevron-right"></i></a>
              </span> 
              <span>
                Cart <i class="fa fa-chevron-right"></i>
              </span>guardar
            </p>
            <h2 class="mb-0 bread">My Cart</h2><div class="container py-5">  
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
                    <form class="user"action="<?php echo base_url().'datos_personas'?>" method="post"> 
                        <br>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" id="nombres"REQUIRED placeholder="nombres" name="nombres">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"  id="apellidos" REQUIRED placeholder="apellidos" name="apellidos">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="direccion" REQUIRED placeholder="direccion" name="direccion">
                            </div>
                        </div> 
                        <br>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"  id="correo"
                            REQUIRED   placeholder="Email Address" name="correo">
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="numb" class="form-control form-control-user" id="telefono"REQUIRED placeholder="telefono" name="telefono">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="dm"REQUIRED placeholder="dm" name="dm">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="observaciones"REQUIRED placeholder="observaciones" name="observaciones">
                            </div>
                        </div>
                        
                        <input type="submit" value="Comprar" class="btn btn-primary btn-user btn-block">
                                </a>
                        <hr>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

</section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url("javascript/scriptb.js"); ?>"></script>
    <script src="<?php echo base_url("javascript/validate.js"); ?>"></script>
  
</body>
    
    
</html>