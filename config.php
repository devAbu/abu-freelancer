<?php

	$hostname = "http://127.0.0.1";
	$username = "newuser";
	$pass = "password";
	$dataBaseName = "freelancer"; 

	$connection = mysqli_connect($hostname, $username, $pass);
	$selection = mysqli_select_db($connection, $dataBaseName);

	$success = true;

?>
