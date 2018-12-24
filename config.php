<?php

	$hostname = "http://3.83.23.191";
	$username = "newuser";
	$pass = "password";
	$dataBaseName = "freelancer";

	$connection = mysqli_connect($hostname, $username, $pass);
	$selection = mysqli_select_db($connection, $dataBaseName);

	$success = true;

?>
