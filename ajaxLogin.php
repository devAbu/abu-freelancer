<?php
    
	define('DB_USER', 'newuser');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'http://3.83.23.191');
	define('DB_NAME', 'freelancer');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");

	$userName = $_REQUEST['userName'];
	$pass = $_REQUEST['pass']

    if ($_REQUEST['task'] == "log") {
            $query = "INSERT INTO login (email, password) VALUES('$userName', '$pass')";
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                $query2 = "SELECT email FROM register WHERE 'password' = '$pass' AND 'userName' = '$userName' ";
                $response2 = @mysqli_query($dbc, $query2);
                if($response2){
                    $i = 0;
                    while ($row = mysqli_fetch_array($response2)) {
                        echo('GOOD');
                    }
                }else{
                    echo mysqli_error($dbc);
                 }
            } else {
                echo mysqli_error($dbc);
            }
        }
        
?>
