<?php

  define('DB_USER', 'newuser');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'http://3.83.23.191');
	define('DB_NAME', 'freelancer');

  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect'. mysqli_connect_error()); 

?>
