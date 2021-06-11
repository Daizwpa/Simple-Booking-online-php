
<?php
require './model/checkAuth.php';
is_login_for_index();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./view/css/fontawesome/css/all.css" rel="stylesheet">

    <link href="./view/css/Bootsrap4.css" rel="stylesheet" id="bootstrap-css">
    <script src="./view/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <style>
    
    .carousel {
  background:#444;
}

/*
Forces image to be 100% width and not max width of 100%
*/
.carousel-item .img-fluid {
  width:100%;
  height:500px;
}
    
    </style>

    <title>Booking Online</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.php">Booking online</a>
               
               <div class="d-flex">
                    
                    <a style="margin-right: 5px;"class="btn btn-outline-primary" href="./view/loginAsUser.php">Login as user</a>
                    
                    <a style="margin-right: 5px;" class="btn btn-outline-primary" href="./view/loginAsCompany.php" >Login as company</a>
                    
               </div>
                
              </div>
            </div>
        </nav>


        <main>
          <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                  <li data-target="#carousel-2" data-slide-to="0" class="active"></li>

              </ol>
              <div class="carousel-inner" role="listbox">
                
                  <div class="carousel-item active">
      
                       <img src="./view/img/regisert.jpg" alt="responsive image" class="d-block img-fluid">
      
                          <div class="carousel-caption">
                              <div>
                                  <h2>Booking System</h2>
                                  <p>You can sig up as </p>
                                  <a  href="./view/signCompany.php" type="button" class="btn btn-primary">Company</a>
                                  <a href="./view/signUser.php" type="button" class="btn btn-primary">User</a>
                                  
                              </div>
                          </div>
                      </a>
                  </div>


              </div>

          </div>
          <!-- /.carousel -->


          <div class="container-fluid">
          </div>          

        </main>
                <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">
        
        <!-- Footer Elements -->
        <div class="container ">
        
          <!-- Social buttons -->
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
              </a>
            </li>
          </ul>
          <!-- Social buttons -->
        
        </div>
        <!-- Footer Elements -->
        
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
          <a href="./index.php"> Moni.com</a>
        </div>
        <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
    
    </body>
</html>