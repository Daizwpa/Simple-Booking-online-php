<?php
require './../model/checkAuth.php';
$user = check_is_user();


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
      include './navbarUser.php';
      
      ?>
 
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
            <?php 
              
              echo '<img style="object-fit:contain" src="'.$user->image.'" alt="..." class="img-fluid rounded-circle"/>';
              ?>

            </div>
            <div class="title">
              <?php
              echo '<h1 class="h4">'.$user->name.'</h1>';
              echo '<p>'.$user->last_name.'</p>';
              
              ?>
            </div>
          </div>
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"><a href="./DashBoordUser.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="./MyresarvationUser.php"> <i class="icon-grid"></i>My resarvations </a></li>
            <li ><a href="./search.php"><i class="icon-search"> Search</i></a></li>


        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Services</h3>
                    </div>
                    <div class="card-body">
                    <div class = "row">
                    <?php
                    include './../model/service.php';
                    $service = new Service();
                    $array_data = $service->All();
                    foreach($array_data as $data){
                      echo'<div class="card  ml-3" style="width: 18rem;">';
                      echo'<img class="card-img-top" style="max-height: 200px;" src="'.$data["image"].'" alt="Card image cap">';
                      echo'<div class="card-body">';
                      echo' <h5 class="card-title">'.$data["name"].'</h5>';
                      echo' <p class="card-text">'.$data["about"].'</p>';
                      echo '<form  action="./../controller/bookingController.php" method="post">';
                      echo '<input type="hidden" id="idser" name="id_service" value="'. $data["id"].'"/>';
                      echo'<input type="submit" class="btn btn-primary" value="Booking"></input>';
                      echo'</form>';
                      echo'</div>';
                      echo'</div>';

                    }
                   
                    
                    ?>
                    </div>
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
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>