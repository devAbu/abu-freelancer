<?php

	$hostname = "127.0.0.1";
	$username = "root";
	$pass = "password";
	$dataBaseName = "freelancer"; 

	$connection = mysqli_connect($hostname, $username, $pass);
	$selection = mysqli_select_db($connection, $dataBaseName);

	$success = true;

	if(!$connection){
		echo "combe";
	}
if(!$selection){
	echo "abu";
}

?>
