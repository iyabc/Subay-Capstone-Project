<?php

   require "data.php";
   $name = $_POST['studuser'];
   $pass = $_POST['studpwd'];
   $hour = $_POST['hours'];
   $section = $_POST['section'];
   $confirm = $_POST['studpwd2'];

   if($confirm != $pass){
      header("location: studregister.php?error=Passwords don't match! Try again.");
   }
   else{
      $sql = "select name from usertable where name = '$name'";  

      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);

      if($num == 1){
            header('location: studregister.php?usertaken=Username already registered! Try Again.');
      }
      else{
   		$reg = "insert into usertable(name, password, hours, section) values 
         ('$name','$pass','$hour','$section')";
   			mysqli_query($con, $reg);
            header('location: studregister.php?regsuccess=Registration Successful!');
      }
   }
?>