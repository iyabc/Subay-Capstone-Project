<?php

   $faciuser = $_POST['faciuser'];
   $facipass = $_POST['facipwd'];

   $cookie_faci = "faci"; 
   $faci_value = $faciuser;

   if($faciuser == "facilitator" && $facipass == "facilitator"){
         setcookie($cookie_faci, $faci_value, time() + (86400 * 30), "/");
         header('location:choosestudent.php');
   }else{
         header ("location: adminlogin.php?facierror=Invalid! Please try again.");
   }
?>