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

    <section  style="margin-left:20px; margin-top:30px;">
        <h1 style="font-size:45px;">My profile</h1>
        <a href="edit-image.html"><img src="images/abu.jpg" alt="profile image" style="border-radius:50%; width:120px; height:120px; float:left; margin-left:20px; margin-top:20px;"></a>
        
        <h2 style="margin-left:165px;margin-top:30px; font-size:30px;">Profile name</h2>
        <a href="edit-rate.html"><h3 style="margin-left:380px; margin-top:-35px; font-size:20px;">30$</h3></a>
        <a href="edit-job.html"><h3 style="margin-left:165px; font-size:20px; margin-top:20px; margin-bottom:20px;">Web developer</h3></a>
        
        <a href="edit-skills.html">
            <span class="badge badge-pill badge-secondary" style="margin-left:20px;">HTML5</span>
            <span class="badge badge-pill badge-secondary">CSS3</span>
            <span class="badge badge-pill badge-secondary">JavaScript</span>
            <span class="badge badge-pill badge-secondary">Ruby</span>
            <span class="badge badge-pill badge-secondary">Adobe Photshop</span>
        </a>
    </section>

    <aside style="float:right; margin-top:-150px; margin-right:150px;">
        <a href="setting-main.php"><input type="button" value="Settings" class="btn btn-success btn-lg" style="width:200px;"></a>
    </aside>
    <hr style="border:1px solid rgb(118, 118, 223);">    
    <article style="margin-left:20px;">
        <h2 style="margin-top:30px;">Overview</h2>
        <a href="edit-overview.html">
            <p style="margin-left:20px; max-width:950px;">
                Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a, a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži varijante Lorem Ipsum-a.
                Zašto ga koristimo?
                Odavno je uspostavljena činjenica da čitača ometa razumljivi tekst dok gleda raspored elemenata na stranici. Smisao korištenja Lorem Ipsum-a jest u tome što umjesto 'sadržaj ovjde, sadržaj ovjde' imamo normalni raspored slova i riječi, pa čitač ima dojam da gleda tekst na razumljivom jeziku. Mnogi programi za stolno izdavaštvo i uređivanje web stranica danas koriste Lorem Ipsum kao zadani model teksta, i ako potražite 'lorem ipsum' na Internetu, kao rezultat dobit ćete mnoge stranice u izradi. Razne verzije razvile su se tijekom svih tih godina, ponekad slučajno, ponekad namjerno (s dodatkom humora i slično).
            </p>
        </a>
    </article>

    <article style="margin-left:20px; margin-top:35px;">
        <h2>Certifications</h2>
        <a href="add-cert.html" style="margin-left:20px;"> <span>ADD FILE</span></a>
        
    </article>

    <article style="margin-left:20px; margin-top:35px;">
        <h2>Education</h2>
        <a href="edit-education.html" style="margin-left:20px;"> <span>ADD FILE</span></a>   
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
