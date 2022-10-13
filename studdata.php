<?php

   require "data.php";
   
   $name = $_COOKIE["student"];
   $hour = $_POST['hours'];
   $section = $_POST['section'];

     $sql = "select * from usertable where name = '$name'";  

   $result = mysqli_query($con, $sql);
   $num = mysqli_num_rows($result);

   if($num == 1){
      $d = "update usertable set hours = $hour, section = '$section' where name = '$name'";
      mysqli_query($con, $d);
      setcookie("student", "", time() - (86400 * 30), "/"); // 86400 = 1 day
      $success = "Edit Success!";
      echo '<script type="text/javascript">alert("' . $success . '");</script>';
      sleep (5);
      header("location: ./choosestudent.php");   
   }
   else{
      $error = "Invalid Username!";
      echo '<script type="text/javascript">alert("' . $error . '");</script>';
      sleep(5);
      header('location: index-editdata.php');
   }

?>

