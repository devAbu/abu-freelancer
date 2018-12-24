<?php

require 'config.php';

if(!$connection){
	die("connection failed ".mysqli_error());
	$success = false;
}

if(!$selection){
	die("selection failed ".mysqli_error());
	$success = false;
}

if($success){

	$jobTitle = $_POST['title'];
	$jobDescription = $_POST['description'];
	$userBudget = $_POST['budget'];
	$deadline = $_POST['date'];

    $query = "INSERT INTO post (jobTitle, jobDescription, budget, deadline) VALUES ('$jobTitle','$jobDescription','$userBudget','$deadline')";
		
	if(mysqli_query($connection,$query)){
	echo "<h3>Job posted succesffuly</h3>";
	header("refresh:1,url=home-loged-hire.php");
	}else{
	echo "<h1>There is a problem with posting the proposal</h1>";
	echo "<br>";
	header("refresh:2,url=home-loged-hire.php");
	}
}
?>
