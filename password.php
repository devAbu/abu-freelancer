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
			
			$userName = $_POST['userName']; echo "<br>";
			$curr = $_POST['currPass']; echo "<br>";
			$new =  $_POST['newPass']; echo "<br>";

			echo "user name: " .$_POST['userName']; echo "<br>";
			echo "user current password: " .$_POST['currPass']; echo "<br>";
			echo "user new password: " .$_POST['newPass']; echo "<br>";

			$sql2 = "SELECT `password` FROM `register` WHERE `userName` ='$userName' ";
			$result = $connection->query($sql2);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "User correct password: " . $row["password"]. "<br>";
				if($row["password"] == $curr){
					$sql = "UPDATE `register` SET `password`='$new' WHERE `userName`='$userName'";

					if ($connection->query($sql) === TRUE) {
						echo "Password changed successfully";
						header("refresh:2,url=setting-pass.html");
					} else {
						echo "Error updating record: " . $connection->error;
						header("refresh:2,url=changePass.php");
					}
				}else{
					echo "Password is uncorrect!!!";
					header("refresh:2,url=changePass.php");
				}
			
			} 
			}else {
				echo "Username is incorrect";
				header("refresh:2, url=changePass.php");
			}
			
			
	}
	

?>
