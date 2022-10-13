<?php

   require "data.php";

   $user = $_COOKIE['studname'];

   $d = "select name from usertable where name = '$user'";

   $result = mysqli_query($con, $d); 
   $num = mysqli_num_rows($result);

   if($num == 1){
   		$sql = "select name, hours, section FROM usertable where name = '$user'";  
   		$c = mysqli_query($con, $sql);
   		$row = mysqli_fetch_array($c,MYSQLI_ASSOC);
   		$b = $row['name'];
   		$f = $row['hours'];
   		$e = $row['section'];
   }
   
?>