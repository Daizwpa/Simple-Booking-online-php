<?php

require './../model/checkAuth.php';
$company = check_is_company();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <?php
      include './navbarcompany.php';
      
      ?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
          <div class="avatar">
          <?php 
              
              echo '<img style="object-fit:contain" src="'.$company->image.'" alt="..." class="img-fluid rounded-circle"/>';
              ?>

            </div>
            <div class="title">
              <?php
              echo '<h1 class="h4">'.$company->name.'</h1>';
              echo '<p>'.$company->about.'</p>';
              
            ?>
            </div>

          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="./DashBoordCompany.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="./listOfService.php"> <i class="icon-grid"></i>List of Service </a></li>
            <li><a href="listReservations.php"> <i class="fa fa-bar-chart"></i>Reservations</a></li>
            <li class="active"><a href="./CreateService.php"> <i class="icon-padnote"></i>Create service </a></li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Create a Service</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Create Serice</li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">

                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Create Service</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="./../controller/createServiceController.php" enctype="multipart/form-data" method="post">
         
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name service</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" placeholder="name service" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" name="about" placeholder="description" class="form-control">
                          </div>
                        </div>
                        

                        
                        <div class="line"></div>
                       
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">service image</label>
                          <div class="col-sm-9">
                            <input type="file" name="fileToUpload"  >
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          
          <?php include './footer.php';?>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>