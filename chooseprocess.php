<?php 
      require "data.php";
      $name = $_POST['studuser'];

      $sql = "select * from usertable where name = '$name'";

      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);

      if($num == 1){
        $cookieName = 'student';
        $studValue = $name;
        setcookie($cookieName, $studValue, time() + 86400, '/');
        header("location: index-editdata.php");
      }
      else{
        header ("location: choosestudent.php?message=Username not found!");
      }
    ?>