<?php
require './../model/checkAuth.php';
is_login();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./css/Bootsrap4.css" rel="stylesheet" id="bootstrap-css">
    <link href="./css/styleLoing.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->

    <title>Booking Online</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="./../index.php">Booking online</a>
               
               <div class="d-flex">
                    
                    <a style="margin-right: 5px;"class="btn btn-outline-primary " href="./loginAsUser.php">Login as user</a>
                    
                    <a style="margin-right: 5px;" class="btn btn-outline-primary" href="./loginAsCompany.php" >Login as company</a>
                    
               </div>
                
              </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                  <div class="card card-signin my-5">
                    <div class="card-body">
                      <h5 class="card-title text-center">Login As user</h5>
                      <form class="form-signin" action="./../controller/loginAsUserController.php" method="post">
                        <div class="form-label-group">
                          <input type="email" id="inputEmail" class="form-control" name="adress" placeholder="Email address" required autofocus>
                          <label for="inputEmail">Email address</label>
                        </div>

                        <div class="form-label-group">
                          <input type="password" id="inputPassword" class="form-control" name="mote" placeholder="Password" required>
                          <label for="inputPassword">Password</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
                        <hr class="my-4">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>