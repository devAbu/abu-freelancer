<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Settings- password</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script>
        function func3(){
            window.history.back();
        }
    </script>

</head>
<body>
    <input type="button" value="Back" class="btn btn-dark" style="width:80px; margin-left:10px;" onclick="func3()">        
        <br>
    <img src="images/logo.png" class="logo" alt="FREELANCER" style="margin-left:40px; margin-top:50px; width:180px; height:180px;" > 
    
    
    

    <h1 style="margin-left:40px; margin-top:30px; font-size:35px;">Password & Security</h1>

    <aside style="margin-left:40px; margin-bottom:20px; margin-top:15px;">
        <a href="setting-main.php"><input type="button" value="Profile settings" class="btn btn-outline-success btn-lg" style ="width:250px;"></a>
    </aside>

    <article style="margin-left:40px;">
        <h2 style="margin-bottom:20px;">Passwrod</h2>
        <a href="changePass.php"><input type="button" value="Change" class="btn btn-outline-success btn-lg" style=" width:250px;"></a>
    </article>

    <article style="margin-left:40px;">
        <h2 style="margin-top:30px; margin-bottom:20px;">Security Question</h2>
        <input type="button" value="Change" class="btn btn-outline-success btn-lg" style = " width:250px;">
    </article>

</body>
</html>