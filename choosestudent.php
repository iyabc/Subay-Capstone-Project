<?php 

  if(isset($_COOKIE["student"])){
    header("location: ./index-editdata.php");
  }
  
  if(isset($_COOKIE["studname"])) {
    header("location: studlanding.php");
  }

  if(isset($_COOKIE["faci"]) || isset($_COOKIE["User"])) {

  }
  else{
    header("location: ./adminlogin.php");
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Student Data</title>

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
      <!-- login -->
  <form action="chooseprocess.php" method="post">
    <!-- PHP -->
    <font color=#45958c><i>
    <?php 
      if(isset($_GET['message'])){
        $message = $_GET['message'];
        echo $message;
      }
    ?>
  </font></i>
   <!--  PHP -->
    <h2>Enter Student Username</h2>
    <br>  
    <h3>
    <div class="form-group">
      <!-- username -->
      <input type="name" name="studuser" class="form-control" placeholder="Username" required>
    </div>
    <br>
  <button type="submit" class="btn btn-xl btn-dark" name="edit">Submit</button>
  </form>
  <br>
  <br>
  
    </h3>
  </div>
  
  </div>
  <!-- end of login -->
  
  </header>  

 
  <!-- end of header -->
  <section class="content-section bg-dark">
   <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
       <a class="btn btn-outline-light btn-xl" href="logout.php">LOGOUT</a>
          </div>
      </div><p class="text-muted small mb-0">Copyright &copy; SUBAY 2019</p>
    </div>
  </section>

  <!-- About -->

      
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
