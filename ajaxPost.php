<?php
    
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'freelancer');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");

	$jobTitle = $_REQUEST['jobTitle'];
	$jobDescription = $_REQUEST['jobDesc'];
	$userBudget = $_REQUEST['usrB'];
	$deadline = $_REQUEST['deadline'];
	


    if ($_REQUEST['task'] == "post") {
		$query = "INSERT INTO post (jobTitle, jobDescription, budget, deadline) VALUES ('$jobTitle','$jobDescription','$userBudget','$deadline')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo('post');
			}else{
				echo mysqli_error($dbc);
			}
		}
        
?>