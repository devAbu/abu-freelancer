<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How it works - Freelancing</title>
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>
            <a href="how-hiring.html"><input type="button" value="How it Works" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
            <a href="aboutUs.html"><input type="button" value="About us" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
            <a href="log.php" class="register"><input type="button" value="Log in" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
            <a href="register.php" class="register"><input type="button" value="Sign up" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
    </header>
        
    <section style="background-color:rgb(255, 223, 118); height:250px;">
        <h1 class="bg-text" style="font-size:45px;">HOW IT WORKS?</h1>
        <a href="how-hiring.html"><input type="button" value="Hiring" id="hire" class="btn btn-primary btn-lg" ></a>
        <a href="how-freelancing.html"><input type="button" value="Freelancing"  id="freel" class="btn btn-primary btn-lg "></a>
    </section>

    <section id="how-nav">
        <ul style=" margin-top:-25px;">
            <a href="#find"><li class="list-item1-freel">Find</li></a>
            <a href="#hired"><li class="list-item2-freel">Get Hired</li></a>
            <a href="#work"><li class="list-item3-freel">Work</li></a>
            <a href="#paid"><li class="list-item4-freel">Get Paid</li></a>
        </ul>
    </section>
    <hr id="how-nav-line">

    <article id="find" style="margin-left:15px; margin-top:50px;">
        <h1>Find rewarding projects</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        
    </article>
    <img id="find-image" src="images/" alt="FIND">

    <article id="hired" style="margin-left:15px; margin-top:50px;">
        <h1>Get hired quickly</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        
    </article>
    <img id="hire-image" src="images/" alt="HIRE">

    <article id="work" style="margin-left:15px; margin-top:50px;">
            <h1>Work efficiently</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>            
    </article>
    <img id="work-image" src="images/" alt="WORK">

    <article id="paid" style="margin-left:15px; margin-top:50px;">
        <h1>Get paid on time</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </article>
    <img id="pay-image" src="images/" alt="PAY">
    
     <center>
        <input id="go" type="button" value="Print this Page" onclick="window.print();" class="btn btn-outline-secondary" style="margin-top:20px;">
    </center>

    <footer style="background-color:rgb(218, 216, 216);">
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
        <center  style="text-align: center; clear:both;">&copy; 2017 Abu</center>
        <br>
        <a href="help.html" ><img src="images/help.png" alt="Help" style="float:right; margin-top:-50px;" width="45px;" height="45px;"></a>
    
    </footer>

</body>
</html>