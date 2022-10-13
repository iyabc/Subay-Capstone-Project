<?php
	
    if(isset($_COOKIE["User"])) {

    setcookie("User", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    header("location: ./index.php");
	}

	if(isset($_COOKIE["faci"])) {

    setcookie("faci", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    header("location: ./index.php");
  	}

	if(isset($_COOKIE["studname"])) {

    setcookie("studname", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    header("location: ./index.php");
  	}

  	if(isset($_COOKIE["student"])) {

    setcookie("student", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    header("location: ./index.php");
  	}


 ?>