<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$dataBaseName = "freelancer";

$connection = mysqli_connect($hostname, $username, $pass);
$selection = mysqli_select_db($connection, $dataBaseName);

$success = true;

if(!$connection){
	die("connection failed ".mysqli_error());
	$success = false;
}

if(!$selection){
	die("selection failed ".mysqli_error());
	$success = false;
}

if($success){

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mail = $_POST['email'];
	$userName = $_POST['userName'];
	$pass = $_POST['pass'];
	$location = $_POST['location'];
	$registerType = $_POST['type'];

    $query = "INSERT INTO register (firstName, lastName, email, userName, password, location, registerType) VALUES ('$firstName','$lastName','$mail','$userName','$pass','$location','$registerType')";
		
	if(mysqli_query($connection,$query)){
	echo "Account created";
	header("location:index.php");
	}else{
	echo "<h1>Account doesn't created. </h1>";
	echo "<br>";
	echo "<h3>Username or email already exists!!!</h3>";
	echo "<br>";
	header("refresh:1,url=register.php");
	}
}
?>

