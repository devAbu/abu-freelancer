<?php
    
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'freelancer');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");

    if ($_REQUEST['task'] == "chnPass") {
            $query = 'UPDATE register SET password = "'.$_REQUEST['newPass'].'" WHERE userName = "'.$_REQUEST['usr'].'" AND password = "'.$_REQUEST['currPass'].'";';
        
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                $query2 = 'SELECT userName FROM register WHERE password = "'.$_REQUEST['newPass'].'" AND userName = "'.$_REQUEST['usr'].'";';
                $response2 = @mysqli_query($dbc, $query2);
                if($response2){
                    $i = 0;
                    while ($row = mysqli_fetch_array($response2)) {
                        echo('DONE');
                    }
                }else{
                    echo mysqli_error($dbc);
                 }
            } else {
                echo mysqli_error($dbc);
            }
        }
        
?>