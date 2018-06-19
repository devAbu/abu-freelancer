<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-register.css" type="text/css" rel="stylesheet" >
    <title>Log in</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <meta name="keywords" content="freelancer, online, job, from, home, earn, money, find, help">
    <meta name="description" content="Free Online Freelancer Web Pages. Help ypu to find job or person to do your task.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    

    <script>
        

        function func3(){
            window.history.back();
        }
        
        function showPass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
    }
}
    </script>

</head>

<body>

    <input type="button" value="Back" class="btn btn-dark" style="width:80px; margin-left:10px;" onclick="func3()">
    <header>
        <img src="images/logo.png" class="logo" alt="FREELANCER"> 
        <center>
        <h1 id="head">FREELANCER</h1>
        <h3 id="head2">----------- LOGIN -----------</h3>
    </center>
    </header>

    <article>
        <form  action = "getDataLogin.php" method = "POST">
        <center>
        <input type="email" placeholder="username/email" name="userName" id="userName autocomplete="email" required="required" style="width:350px;" class="form-control">
    
        <br>
        <input type="password" id="pass" placeholder="password" name="pass" required class="form-control" style="width:350px;">
        <input type="checkbox" id="showPass" onclick="showPass();" style="margin-left:220px;">Show Password
    </center>
        <br>
        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0" style="margin-left:150px;">
            <input type="checkbox" class="custom-control-input" checked >
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Remember me</span>
        </label>
        <a href="#"> <label style="padding-left:95px;">Forgot password? </label></a>
        <br><br>
        <center>
        
		<input type="SUBMIT" value="Login work" name="insert" class="btn btn-outline-primary" style="width:150px;">
        </center>
    
        <label style="font-size:24px; padding-top:30px;">No account?</label>
        <a href="register.php"><input type="button" value="Sign up"  class="btn btn-success" style="color:gold;"></a>
        </form>
    </article>

	
</body>
</html>