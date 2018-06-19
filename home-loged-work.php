<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>My Job Feed</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
        <header>
                <a href="home-loged-work.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>
        
                <a href="home-loged-work.php" class="nav-button"><input type="button" value="Find Job"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
                <a href="messages.php" class="nav-button"><input type="button" value="Messages"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
                
                <input  id="search-loged" type="text" placeholder="Find Freelancers..." style="margin-left:100px; margin-right:200px;">
        
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

            <center>
            <h1 style="font-size:55px; color:rgb(133, 203, 204); margin-bottom:50px;">FIND WORD</h1>
        </center>
    <aside style="float:left; margin-right:20px; margin-left:20px;">
        <p style="font-size:35px;">Categories</p>
        <a href="#" class="badge badge-primary" style="margin-bottom:10px;">Web design</a> <br>
        <a href="#" class="badge badge-primary" style="margin-bottom:10px;">Animations</a> <br>
        <a href="#" class="badge badge-primary" style="margin-bottom:10px;">Ios development</a> <br>
        <a href="#" class="badge badge-primary" style="margin-bottom:10px;">Game Developmen</a> <br>
        <a href="#" class="badge badge-primary" style="margin-bottom:10px;">Photo Editor</a> <br>
        <a href="#" class="badge badge-primary">Logo designer</a> <br>
    </aside>
    <center>
    <article>
        <?php
        $hostname = "localhost";
        $username = "root";
        $pass = "";
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
            $sql = "SELECT jobTitle , jobDescription, budget, deadline FROM post ORDER BY deadline DESC";
            $result = $connection->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
             while($row = $result->fetch_assoc()) {
                echo "<br><a href='job-work.html'>Job Title:<br>" .$row["jobTitle"]. " </a>" ." <br> <a href='job-work.html'> Job Description: <br>" . $row["jobDescription"]. "</a>"  ."<br> Job owner budget: " . $row["budget"]. "<br> Deadline for the job:" .$row["deadline"]. "<br>" ."<a href='proposal.php' ><input type='button' value='Post proposal' class='btn btn-info' style='margin-right:0px; width:150px; margin-bottom:40px;'></a> <br>";
             }
        } else {
            echo "0 results";
          }
}

    ?>
    </article>
</center>

    <footer style=" background-color:rgb(218, 216, 216);">
        <label id="user">Users number:</label>
        <label>Jobs posted number:</label>
        <br>
        <?php
        $hostname = "localhost";
        $username = "root";
        $pass = "";
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