<?php
    
	define('DB_USER', 'newuser');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'http://3.83.23.191');
	define('DB_NAME', 'freelancer');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");

	$bid = $_REQUEST['bid'];
	$fee = $_REQUEST['fee'];
	$get = $_REQUEST['get'];
	$cover = $_REQUEST['cover'];
	


    if ($_REQUEST['task'] == "prop") {
		$query = "INSERT INTO proposal (userBid, ourFee, userPaid, letter) VALUES ('$bid','$fee','$get','$cover')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo('send');
			}else{
				echo mysqli_error($dbc);
			}
		}
        
?>
