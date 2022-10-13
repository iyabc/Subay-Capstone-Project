<?php

  if(isset($_COOKIE["User"])) {
    header("location: ./adminlanding.php");
  }

  if(isset($_COOKIE["faci"])) {
    header("location: ./choosestudent.php");
  }

  if(isset($_COOKIE["studname"])) {
    header("location: ./studlanding.php");
  }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SUBAY : Community Service Hours Tracker</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<!-- side menu -->

<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#login">Login</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- end side menu
 -->
<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1"> <img src="subay.png" alt="subay" width="45% " height="45%"> </h1>
      <br>
      <br>
      <br>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#login">Proceed to Login</a>
    </div>
  </header>

  <!-- About -->
  <section class="content-section bg-primary text-light text-center" id="about">
    <div class="container text-center">
        <div class="col-lg-10 mx-auto">
          <h1><i>ABOUT</i></h1>
          <br>
          <h2><font color=#000000><i>SUBAY</i></font> seeks to provide a more efficient and a more accessible way of monitoring service hours!</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Login -->
  <section class="content-section bg-light text-dark text-center" id="login">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1><i>LOGIN</i></h1>
          <br>
          <h2>Are you a student or an admin?</h2>
          <br>
          <a class="btn btn-secondary btn-xl" href="studentlogin.php">Student</a>
          <a class="btn btn-dark btn-xl" href="adminlogin.php">Admin</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="content-section bg-dark text-white text-center" id="contact">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1><i>FROM THE RESEARCHERS</i></h1>
          <br>
          <p>
          Greetings! We are students from Ateneo de Davao - Senior High, STEM Pre-Computer Studies strand. We aim to develop and explore different possibilities that we think will ease the lives of people. The rise of technology has provided us with different opportunities and has given people the chance to make their ideas into something that can be of everyday use.
          </p>
          <br>
          <p>
          <h5><i>
          CONTACT US THROUGH SOCIAL MEDIA!
          </i></h5>
          <a class="btn-floating btn-xl btn-fb fab fa-facebook-f pr-1" href="https://www.facebook.com/adduseniorhigh/"></a>
          <a class="btn-floating btn-xl btn-tw fab fa-twitter" href="https://twitter.com/AdDUSeniorHigh"></i></a>
        </p>
        </div>
      </div>
    </div> 
    <br>
    <br>
    <p class="text-muted small mb-0">Copyright &copy; SUBAY 2019</p>
    </div>
  </footer>
  </section>


     

  


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
