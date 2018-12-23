<?php

$hostname = "http://3.83.23.191";
$username = "newuser";
$pass = "password";
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

	$userBid = $_POST['bid'];
	$ourFee = $_POST['fee'];
	$userPaid = $_POST['get'];
	$letter = $_POST['letter'];

    $query = "INSERT INTO proposal (userBid, ourFee, userPaid, letter) VALUES ('$userBid','$ourFee','$userPaid','$letter')";
		
	if(mysqli_query($connection,$query)){
	echo "Proposal sent succesffuly";
	header("refresh:3,url=home-loged-work.php");
	}else{
	echo "<h1>There is a problem with posting the proposal</h1>";
	echo "<br>";
	header("refresh:2,url=home-loged-work.php");
	}
}
?>
