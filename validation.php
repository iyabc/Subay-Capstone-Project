<?php

   require "data.php";
   $name = $_POST['studuser'];
   $pass = $_POST['studpwd'];

   $d = "select * from usertable where name = '$name' && password = '$pass'";

      
   $result = mysqli_query($con, $d);
   $num = mysqli_num_rows($result);

   if($num == 1){ 
      header('location:studlanding.php');
      $cookiestud = 'studname';
      $studvalue = $name;
      setcookie($cookiestud, $studvalue, time() + 86400, '/');
      }
      else{
      header ("location: studentlogin.php?studerror=Invalid! Please try again.");
      }

?>  

