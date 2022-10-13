<?php

  if(!isset($_COOKIE["User"])) {
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

  <title>Register A Student</title>


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
  <form action="studreg.php" method="post">
    <h2>STUDENT REGISTRATION</h2>
    <h3>
    <div class="input-group">
       <!-- username -->
      <input type="name" name="studuser" class="form-control" placeholder="Username" required>
    </div>
    <div class="input-group">
      <!-- password -->
      <input type="password" name="studpwd" class="form-control" placeholder="Password" required>
    </div>
    <div class="input-group">
      <!-- password -->
      <input type="password" name="studpwd2" class="form-control" placeholder="Confirm Password" required>
    </div>
    <div class="input-group">
      <!-- hours -->
      <input type="number" min="0" max="999" name="hours" class="form-control" placeholder="Hour/s" required>
    </div>
    <!-- section -->
    <div class="form-group" class="authentication">
    <select required class="form-control" id="section" name="section">
      <option value=""> Select Section </option>
      <option value="Aranha">Aranha</option>
      <option value="Berthieu">Berthieu</option>
      <option value="Carvalho">Carvalho</option>
      <option value="Chabanel">Chabanel</option>
      <option value="Garnet">Garnet</option>
      <option value="Kostka">Kostka</option>
      <option value="Ogilvie">Ogilvie</option>
      <option value="Perez">Perez</option>
      <option value="Rubio">Rubio</option>
      <option value="Aquaviva">Aquaviva</option>
      <option value="Andlauer">Andlauer</option>
      <option value="Angelis">Angelis</option>
      <option value="Arrowsmith">Arrowsmith</option>
      <option value="Baldinucci">Baldinucci</option>
      <option value="Bobola">Bobola</option>
      <option value="Briant">Briant</option>
      <option value="Brito">Brito</option>
      <option value="Calungsod">Calungsod</option>
      <option value="Colombiere">Colombiere</option>
      <option value="Cottam">Cottam</option>
      <option value="Azevedo">Azevedo</option>
      <option value="Dajani">Dajani</option>
      <option value="Daniel">Daniel</option>
      <option value="Del Castillo">Del Castillo</option>
      <option value="Hurtado">Hurtado</option>
      <option value="Lewis">Lewis</option>
      <option value="Miki">Miki</option>
      <option value="Ota">Ota</option>
      <option value="Jouges">Jouges</option>
      <option value="Nakaura">Nakaura</option>
      <option value="Pongracz">Pongracz</option>
      <option value="Lalemant">Lalemant</option>
      <option value="Gavan">Gavan</option>
      <option value="Loyola">Loyola</option>
      <option value="Collins">Collins</option>
      <option value="Claver">Claver</option>
      <option value="Anchieta">Anchieta</option>
      <option value="Berchmans">Berchmans</option>
      <option value="Brebeuf">Brebeuf</option>
      <option value="Campion">Campion</option>
      <option value="Denn">Denn</option>
      <option value="Favre">Favre</option>
      <option value="Isore">Isore</option>
      <option value="Navarro">Navarro</option>
      <option value="Bellarmine">Bellarmine</option>
      <option value="Borgia">Borgia</option>
      <option value="Escribano">Escribano</option>
      <option value="Mangin">Mangin</option>
      <option value="Pro">Pro</option>
      <option value="Rodriguez">Rodriguez</option>
      <option value="Southwell">Southwell</option>
      <option value="Page">Page</option>
      <option value="Mayer">Mayer</option>
      <option value="Corby">Corby</option>
      <option value="Loyola">Loyola</option>
      <option value="De Hoyos">De Hoyos</option>
      <option value="Evans">Evans</option>
      <option value="Fausti">Fausti</option>
      <option value="Ferreres">Ferreres</option>
      <option value="Fernando">Fernandez</option>
      <option value="Fontoura">Fontura</option>
      <option value="Garate">Garate</option>
      <option value="Ruiz">Ruiz</option>
      <option value="Ryosetsu">Ryosetsu</option>
      <option value="Realino">Realino</option>
      <option value="Kisai">Kisai</option>
      <option value="Kasui">Kasui</option>
      <option value="Hernandez">Hernandez</option>
      <option value="Holland">Holland</option>
      <option value="Owen">Owen</option>
      <option value="Pantalia">Pantalia</option>
      <option value="Regis">Regis</option>
      <option value="Sales">Sales</option>
    </select>
  </div>
  <button type="submit" class="btn btn-xl btn-primary" name="register_btn">REGISTER STUDENT</button><br>
    </h3>
    <font color=#45958c size="4"><i>
    <?php 
        if(isset($_GET['error'])){
        $message = $_GET['error'];
        echo $message;
        }
       if(isset($_GET['usertaken'])){
        $message = $_GET['usertaken'];
        echo $message;
        }
        if(isset($_GET['regsuccess'])){
        $message = $_GET['regsuccess'];
        echo $message;
        }
    ?>
    </font></i>
  </div>
  </form>
  <!-- end of login -->
  </div>
  </header>
  <!-- end of header -->

  <section class="content-section bg-dark">
   <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <a class="btn btn-outline-light btn-xl" href="adminlanding.php">BACK</a>
          </div>
      </div> <p class="text-muted small mb-0">Copyright &copy; SUBAY 2019</p>
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
