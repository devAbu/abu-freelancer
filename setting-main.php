<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Profile</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="home-loged-work.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>

        <a href="home-loged-work.php" class="nav-button"><input type="button" value="Find Job"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
        <a href="messages.php" class="nav-button"><input type="button" value="Messages"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
        
        <input  id="search-loged" type="text" placeholder="Find Freelancers..." style="margin-left:100px; margin-right:240px;">

        <a href="profile.php"><img src="images/abu.jpg" alt="Profile image" style="border-radius:50%; width:80px; height:80px; " >
        <span style="font-size:17px;">Abdurahman A. </span></a>
        <select  class="custom-select">
            <option selected></option>
            <option><a href="profile.php"><img src="images/" alt="profile image">
            Abdurahman A.<br> Freelancer</a></option>
            <option><a href="setting-main.php"> Setting</a></option>
            <option><a href="index.php"> Log out</a></option>
        </select>
		<a href="logout.php"><input type="button" value="Log out" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px; float:right;" ></a>

    </header>

    <article style="margin-left:20px;">
        <h2 style="font-size:35px;">Account</h2>
        <input type="button" value="Edit" class="btn btn-light" style="margin-top:-70px; margin-left:220px;">

        <p style="margin-top:50px;">User ID <span style="margin-left:350px;">abu09</span></p> 
        <p style="margin-top:20px;">Name <span style="margin-left:230px;">Abdurahman Almonajed</span></p>
        <p style="margin-top:20px;">Email <span style="margin-left:190px;">abud_almonajed@hotmail.com</span></p>
    </article>

    <aside style="margin-left:115px; margin-top:30px; ">
        <a href="setting-pass.php"><input type="button" value="Change password" class="btn btn-outline-success"></a>
    </aside>

    <article style="margin-left:20px; margin-top:30px;">
        <h2 style="font-size:35px;">Location</h2>
        <input type="button" value="Edit" class="btn btn-light" style="margin-top:-70px; margin-left:220px;">

        <p style="margin-top:50px;">Time Zone <span style="margin-left:300px;">UTC+01:00</span></p>
        <p style="margin-top:20px;">Address <span style="margin-left:80px;">Grada Bakua 11, Dobrinja, Sarajevo 7100, BiH</span></p>
        <p style="margin-top:20px;">Phone <span style="margin-left:295px;">(+387)61091675</span></p>
    </article>

    <footer style=" background-color:rgb(218, 216, 216); margin-top:20px;">
        <label id="user">Users number:</label>
        <label>Jobs posted number:</label>
        <br>
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
            $query = "SELECT ID from register WHERE ID=(SELECT max(ID) FROM register)";
            $result = $connection->query($query);
            if($result){
                $row = mysqli_fetch_row($result);
                echo "<input type='text' placeholder='$row[0]' readonly style='margin-right:38px;'>";
            }

            $query2="SELECT ID from post WHERE ID=(SELECT max(ID) FROM post)";
            $result2 = $connection->query($query2);
            if($result2){
                $row2 = mysqli_fetch_row($result2);
                echo "<input type='text' placeholder='$row2[0]' readonly style='margin-right:38px;'>";
            }

        }
        ?>
                
        <br>
        <label style="margin-top:100px;" >Follow us:</label>
        <a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook" width="75px;" height="45px;" style="border-radius:50%;"></a>
        <a href="https://www.linkedin.com"><img src="images/linkedin.png" alt="LinkedIn" width="50px;" height="45px;" style="border-radius:50%;"></a>
        <a href="https://www.instagram.com"><img src="images/instagram.png" alt="Instagram" width="85px;" height="100px;" style="margin-top:-25px;margin-left:-5px;"></a>
        <a href="https://plus.google.com"><img src="images/google+.png" alt="Google+" width="60px;" height="50px;" style="margin-left:-10px;"></a>
        <a href="https://twitter.com" ><img src="images/twitter.png" alt="Twitter" width="60px;" height="50px;" style="margin-left:10px; border-radius:50%;"></a>
        <br>
        <center  style="text-align: center; clear:both;">&copy; 2017 <span style="color:rgb(0, 0, 139); font-size:20px;">Abu</span></center>
        <br>
        <a href="help.html" ><img src="images/help.png" alt="Help" id="help" style="float:right; margin-top:-50px;" width="45px;" height="45px;"></a>
    </footer>

</body>
</html>
