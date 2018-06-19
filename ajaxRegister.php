<?php
    
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'freelancer');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");

	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$mail = $_REQUEST['email'];
	$userName = $_REQUEST['usr'];
	$pass = $_REQUEST['pass'];
	$location = $_REQUEST['loc'];
	$registerType = $_REQUEST['type'];


    if ($_REQUEST['task'] == "register") {
		$query = "INSERT INTO register (firstName, lastName, email, userName, password, location, registerType) VALUES ('$firstName','$lastName','$mail','$userName','$pass','$location','$registerType')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo('NEW');
			}else{
				echo mysqli_error($dbc);
			}
		}
        
?>