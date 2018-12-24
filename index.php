<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Freelancer</title>
    <link rel="icon" type="image/ico" href="images/icon.ico" />
    <meta name="author" content="abu">
    <meta name="keywords" content="freelancer, online, job, from, home, earn, money, find, help">
    <meta name="description" content="Free Online Freelancer Web Pages. Help ypu to find job or person to do your task.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 
</head>

<body>

    
    <header>
        <a href="index.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>
        <a href="how-hiring.html" class="nav-button"><input type="button" value="How it Works" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
        <a href="aboutUs.html" ><input type="button" value="About us" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"> </a>
        <a href="log.php" class="register"><input type="button" value="Log in" id="login" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"> </a>
        <a href="register.php" class="register"><input type="button" value="Sign up" id="signup" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"> </a>
    </header>


    <section style="margin-top:30px;">
        <div id="right_part" style="float:right; height:300px;">
            <img id="fist-image" src="images/mobile-app-slideshow.png" width="250px">
            <img id="second-image" src="images/web-app-slideshow.png" width="250px">
            <img  id="third-image" src="images/card-slideshow.png" width="250px">
            <p>This card design cost <span>15$</span></p>
        </div>

        <div id="left_part" style="float:left; height:300px;">
            <h2>Here the best freelancer for your job</h2>        
            <p>Today millions of small or big businesses use freelance jobs!</p>
            <br>
            <a href="register.php"><input type="button" value="Get Started" class="btn btn-success btn-lg "></a>
        </div>    
    </section>
<br>
    <article id="services">
        <h3 style="font-size:35px; padding-bottom:50px; padding-top:310px; text-align:center;">Freelancer Services</h3>
        
        <div id="image-services" style="margin-top:20px;">
            <div id="image-1" > 
                <a href="bestOf.html"><img src="images/web-developer.jpg" alt="Web developers" class="rounded float-left"></a>
            </div>

            <div class="image-2" style="padding-right:100px;" >
                <a href="bestOf.html"><img src="images/mobile-developer.jpg" alt="Mobile developers" class="rounded float-right"></a> 
            </div>
        
            <div class="image-3" style="padding-left:50px;">
                <a href="bestOf.html"><img src="images/designer.jpg" alt="Designers" class="rounded mx-auto d-block"> </a>
            </div>
        
            <div class="image-4" style="margin-top:80px;">
                <a href="bestOf.html"><img src="images/computer-network.jpg" alt="Computer Networks" class="rounded float-left"></a>
            </div>

            <div class="image-5" style="padding-right:100px;" >
                <a href="bestOf.html"><img src="images/writers.jpg" alt="Writers" class="rounded float-right"></a>
            </div>

            <div class="image-6">
                <a href="bestOf.html"><img src="images/editors.jpg" alt="Editors" class="rounded mx-auto d-block"></a>
            </div>
            <br>
            <center style="margin-left:-120px;">
                <a href="showAll.html"><input type="button" value="Show All" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px; width:150px;"></a>
            </center>
        </div>
    </article>

    <article style="background-color:rgb(181, 245, 250); border-bottom: 8px solid rgb(1, 144, 180);">
        <h2 style="text-align:center; padding-top:50px;">How it Works?</h2>
        <p id="how-text" style="padding-top:20px; max-width:1300px;padding-left:20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <h3 style="padding-left:30px; color:gold;">Process for earn</h3>
        <ul style="padding-left:75px; float:left;" >
            <li> Lorem Ipsum has been</li>
            <li> Lorem Ipsum has been</li>
            <li> Lorem Ipsum has been</li>
            <li> Lorem Ipsum has been</li>
            <li> Lorem Ipsum has been</li>
        </ul>        
        <video width="550" height="300" controls loop autoplay muted>
                <source src="videos/how.mp4" type="video/mp4" >
        </video>
    </article>

    
    
    <footer style="margin-top:-5px; background-color:rgb(218, 216, 216);">
        <label id="user">Users number:</label>
        <label>Jobs posted number:</label>
        <br>
        <?php
        require 'config.php';

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
        
        <a href="help.html"><img src="images/help.png" alt="Help" id="help" style="float:right; margin-top:-50px;" width="45px;" height="45px;" data-toggle="modal" data-target="#exampleModalLong"></a>    
    </footer>
    
    
</body>
</html>

