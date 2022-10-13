<?php


   $aduser = $_POST['adminuser'];
   $adpass = $_POST['adminpwd']; 

   if($aduser == "admin" && $adpass == "admin"){
      $cookie_name = "User"; 
      $cookie_value = $aduser;
      $error == true;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30) , "/");
      header("location: adminlanding.php");
   }
   else{
      header ("location: adminlogin.php?adminerror=Invalid! Please try again.");
   }

?>