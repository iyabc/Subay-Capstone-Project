<?php

  if(!isset($_COOKIE["User"])) {
    header("location: ./adminlogin.php");
  }
  if(isset($_COOKIE["faci"])) {
    header("location: ./index-editdata.php");
  }
  if(isset($_COOKIE["studname"])) {
    header("location: ./studlanding.php");
  }

  if(isset($_COOKIE["student"])){
    header("location: ./index-editdata.php");
  }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Landing</title>    


  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<body id="page-top">
 
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1>Welcome Admin!</h1>
  <section class="content-section
  light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <a class="btn btn-primary btn-xl" href="studregister.php">REGISTER A STUDENT</a>
          <a class="btn btn-dark btn-xl" href="choosestudent.php">EDIT STUDENT DATA</a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- end of header -->
      
    </div>
  </header> 
  <section class="content-section bg-dark">
   <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <a class="btn btn-outline-light btn-xl" href="logout.php">LOGOUT</a>
          </div>
      </div>
      <br>
      <br>
      <p class="text-muted small mb-0">Copyright &copy; SUBAY 2019</p>
    </div>

  </section>

  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
