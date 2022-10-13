<?php

  if(isset($_COOKIE["User"])) {
    header("location: ./adminlanding.php");
  }

  if(isset($_COOKIE["faci"])) {
    header("location: ./index-editdata.php");
  }

  if(!isset($_COOKIE["studname"])) {
    header("location: ./studentlogin.php");
  }

 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Data</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min2.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1> Welcome Student! </h1>
      <br>
    <div class="col-lg-10 mx-auto">
      <font color="black" size="3">
          <h2> 
         <?php
            require "display.php";
         ?>   
         <table style="width:100%" border="5%" padding="5%">
          <tr>
            <th>Username</th>
            <th>Hour/s</th>
            <th>Section</th>
          </tr>
          <tr>
            <td><?php echo $b ?></td>
            <td><?php echo $f ?></td>
            <td><?php echo $e ?></td>
          </tr>
        </table>
          </h2>
        </div>
        <br>
        <br>
        <a class="btn btn-primary btn-xl" href="logout.php">Logout</a>
  </header>
      <p class="text-muted small mb-0">&copy; SUBAY 2019</p>
    </div>
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
