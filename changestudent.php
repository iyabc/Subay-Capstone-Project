<?php

	if(isset($_COOKIE["student"])){
		setcookie("student", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    	header("location: ./choosestudent.php");
	}

?>