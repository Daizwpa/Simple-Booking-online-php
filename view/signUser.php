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
    <link href="./css/fontawesome/css/all.css" rel="stylesheet">
    <link href=".//css/Bootsrap4.css" rel="stylesheet" id="bootstrap-css">
    <script src="./js/sign.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link herf="./css/signUser.css" rel="stylesheet" />
    <style>
        main {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }
        .file {
          visibility: hidden;
          position: absolute;
        }

    </style >
    <script src="./js/upload.js"></script>
    <title>Booking Online</title>

    </head>
    <body>
      
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="./../index.php">Booking online</a>
             
             <div class="d-flex">
                  
                  <a style="margin-right: 5px;"class="btn btn-outline-primary  " href="./loginAsUser.php">Login as user</a>
                  
                  <a style="margin-right: 5px;" class="btn btn-outline-primary " href="./loginAsCompany.php" >Login as company</a>
                  
             </div>
              
            </div>
          </div>
        </nav>
        <main>
        <div class="container styleline ">
            <div class="row py-5 mt-4 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 text-white ">
                    <h1>Create an Account</h1>
                    <h2>As a User</h2>
                    </p>
                </div>
        
                <!-- Registeration Form -->
                <div class="col-md-7 col-lg-6 ml-auto lgi bg-light pt-5 rounded">
                    <form action="./../controller/registerAsUserController.php" enctype="multipart/form-data" method="post">
                        <div class="row">
        
                            <!-- First Name -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input id="firstName" type="text" name="name" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                            </div>
        
                            <!-- Last Name -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
                                    </span>
                                </div>
                                <input id="lastName" type="text" name="last_name" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                            </div>
        

        
                            <!-- Email Address -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-envelope text-muted"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" name="adress" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                            </div>
        
                            <!-- Phone Number -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-phone-square text-muted"></i>
                                    </span>
                                </div>
                                
                                <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                            </div>.
        
        

        
                            <!-- Password -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-lock text-muted"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" name="mote" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                            </div>
        
                            <!-- Password Confirmation -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-lock text-muted"></i>
                                    </span>
                                </div>
                                <input id="passwordConfirmation" type="text" name="moteConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                            </div>
        
                            <!-- Submit Button -->

                            
                            <div class="input-group col-lg-11 mb-4 ml-4">

                            <label class="form-label" for="customFile">Upload image</label>
                            <input type="file" name="fileToUpload" class="form-control" id="customFile" /> 

                                
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">
                               <input type="submit" name="submit" class="btn btn-primary btn-block py-2" value="Create your account">

                            </div>

                            <!-- Already Registered -->
                            <div class="text-center w-100">
                                <p class="text-muted font-weight-bold">Already Registered? <a href="#" class="text-primary ml-2">Login</a></p>
                            </div>
        
                        </div>
                    </form>
                </div>
            </div>
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
          <a href="./../index.php"> Moni.com</a>
        </div>
        <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
    </body>
</html>



