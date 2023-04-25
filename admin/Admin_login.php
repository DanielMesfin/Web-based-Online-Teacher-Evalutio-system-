<?php include_once("AdminLoginHolder.php");?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/remixicons/fonts/remixicon.css">
  <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/admin.css">
  <title>Login to admin page </title>
    <!-- the validation of login information-->
    <style>
      .error {color: #FF0000;
        
      }
    </style>  
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" id="home">
    <!-- NAV -->    
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./assets/img/logo.jpg" width="50px" height="40px" alt="this is logo image" id="login">
        </a>
        <h1>WELL COME TO ADMIN LOGIN PAGE </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#home"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#team"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
          </ul>
          <ul class="navbar-nav ml-auto"><li navbar-nav ml-auto><button class="btn danger"  data-bs-toggle="modal" data-bs-target="#loginModel" id="btn-login"><img src="./assets/img/C.PNG" alt="this is image" srcset=""width="48px" height="30px"></button></li></ul>
        </div>
      </div>
    </nav>
    <section id="hero">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-3 text-white">Haramaya University Online Teachers Evaluation System </h1>
            <p>Online Teachers Evaluation System is available Online for all students and teachers to insure the quality of eduction 
              for this university such that it is one of the most powerful eduction and research center of East Africa. The Talented Teachers role is very huge for the achievement this university  
            </p>
          </div>
          <div class="col-lg-5  " id="form-group">
            <div class="modal fade" id="loginModel" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h1 class="modal-title " id="exampleModalToggleLabel">LogIn For only Admin of OTES </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="../php/otes.php" method="post" id="formInput">
                      <div class="input-group-1 ">
                        <input type="text" class="form-control  " placeholder="Enter User Id " aria-label="Recipient's username" aria-describedby="button-addon2" name="uid"> <br>
                        <!-- <span class="error">* <?php// echo $userNameErr;?></span>   -->
                        <input type="password" class="form-control" placeholder="Enter Password" aria-label="Recipient's username"aria-describedby="button-addon2" name="password"> <br>
                        <!-- <span class="error">* <?php //echo $passwordError;?></span>   -->
                        <button class="btn btn-brand col-lg-4 " type="submit" id="button-addon2" name="submit_admin_login">Log In</button>
                      </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <script src="assets/js/index.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
  </html>
