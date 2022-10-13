<?php

  if(isset($_COOKIE["User"])) {
    header("location: ./adminlanding.php");
  }

  if(isset($_COOKIE["faci"])) {
    header("location: choosestudent.php");
  }
  if(isset($_COOKIE["studname"])) {
    header("location: ./studlanding.php");
  }
  if(isset($_COOKIE["student"])) {
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

  <title>Admin/Facilitator Login</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/noform.css" rel="stylesheet">
  <link href="css/loginaf.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
   <div class="container login-container">
            <div class="row">
          <!--     admin --> 
                <div class="col-md-6 login-form-1">
                  <form action="adminlog.php" method="post">
    
                    <h3>Admin Login</h3>
                        <div class="form-group">
                            <input type="text" name="adminuser" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="adminpwd" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-xl btn-primary">LOGIN</button>
    <font color=#45958c size="4"><i>
    <?php 
        if(isset($_GET['adminerror'])){
        $message = $_GET['adminerror'];
        echo $message;
      }
    ?>
    </font></i>
                  </form>
                </div>
          <!--    faci -->
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="adlogo.png" alt=""/>
                    </div>
                  <form action="facilog.php" method="post">
                    <h3>Facilitator Login</h3>
                        <div class="form-group">
                            <input type="text" name="faciuser" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="facipwd" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-xl btn-primary">LOGIN
                        </button>
    <font color=#45958c size="4"><i>
    <?php 
        if(isset($_GET['facierror'])){
        $message = $_GET['facierror'];
        echo $message;
      }
    ?>
    </font></i>
                  </form>
                </div>
            </div>
        </div>
  <!-- end of login -->
  </header> 
  
  <!-- end of header -->

  <section class="content-section bg-dark">
   <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <a class="btn btn-outline-light btn-xl" href="index.php">Back to Home</a>
          </div>
      </div>
      <br>
      <br>
      <p class="text-muted small mb-0">Copyright &copy; SUBAY 2019</p>
    </div>
  </section>
   
      
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
