<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Messages</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <header>
            <a href="home-loged-work.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>
            <a href="home-loged-work.php"><input type="button" value="Find Job" class="btn btn-outline-primary waves-effect btn-lg" style="border:0;"></a>
            <a href="chat.html"><input type="button" value="Messages" class="btn btn-outline-primary waves-effect btn-lg" style="border:0;"> </a>
            <input type="text" id="search-loged" placeholder="Search Job..." style="margin-left:100px;margin-right:250px;">
            <a href="profile.php"><img src="images/abu.jpg"  alt="Profile image" style="border-radius:50%; width:80px; height:80px; ">
            Profile name</a>
            <select>
                <option selected></option>
                <option><a href="profile.php"><img src="images/" alt="profile image" >
                Profile name <br> Freelancer</a></option>
                <option><a href="setting-main.php"> Setting </a></option>
                <option><a href="index.php"> Log out</a></option>
            </select>
		<a href="logout.php"><input type="button" value="Log out" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px; float:right;" ></a>

    </header>

    <article>
        <img src="images/" alt="employee picture">
        <input type="button" value="Employee name #1"> <br>
        <img src="images/" alt="employee picture">
        <input type="button" value="Employee name #2"><br>
        <img src="images/" alt="employee picture">
        <input type="button" value="Employee name #3"><br>
        <img src="images/" alt="employee picture">
        <input type="button" value="Employee name #4"><br>
        <img src="images/" alt="employee picture">
        <input type="button" value="Employee name #5"><br>
        <img src="images/" alt="employee picture">
    </article>

    <article>
        <h3>Employee name</h3>
        <p>Job title</p>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <br>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <br>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <span>Message</span>
        <br>
        <input type="text" placeholder="Type message">
        <input type="file" accept="application/pdf">
        <input type="submit" value="SEND">
    </article>


</body>
</html>