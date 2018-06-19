<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-register.css" type="text/css" rel="stylesheet" >
    <title>Create an account</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>

    <script>
        function func(){
            window.history.back();
        }
        
        function showPass(){
            var pass=document.getElementById('pass');
            if(document.getElementById('showPass').checked){
                pass.setAttribute('type','text');
            }
            else
                pass.setAttribute('type','password');
        }
        
        function upperCase() {
             var x = document.getElementById("firstName");
             x.value = x.value.toUpperCase();
             var x2 = document.getElementById("lastName");
             x2.value = x2.value.toUpperCase();
            }

		function radioChange(){

			if(document.getElementById("type1").checked){
				var x = document.getElementById("type1").value;
				document.getElementById("type").value = x;
			}else if(document.getElementById("type2").checked){
			var x2 = document.getElementById("type2").value;
				document.getElementById("type").value = x2;
			} 



		}
    </script>

</head>

<body>

    <input type="button" value="Back" class="btn btn-dark" style="width:80px; margin-left:10px;" onclick="func();">

    <header>
        <img src="images/logo.png" class="logo" alt="FREELANCER"> 
        <center>
            <h1 id="head">FREELANCER</h1>
            <h3 id="head2">----------- SIGN UP WITH -----------</h3>
        </center>
    </header>

    <article>
        <center>
            <a href="https://www.facebook.com"><input type="button" value="FACEBOOK" class="fa fa-facebook"></a>
            <a href="https://plus.google.com"><input type="button" value="GOOGLE+" class="fa fa-google"></a>
            <a href="https://www.linkedin.com"><input type="button" value="LINKEDIN" class="fa fa-linkedin"></a>
    
            <p style="margin-top:40px; margin-bottom:30px;">------------------ OR ------------------</p>
            
			<form > <!-- action = "getDataRegister.php" method = "POST" -->
            <input type="text" id="firstName" class="form-control" placeholder="First name" autofocus  style="width:350px;" onchange="upperCase()" name="firstName">
			<br>
            <input type="text" class="form-control" placeholder="Last name" autofocus required="required" style="width:350px;" onchange="upperCase()"  id="lastName" name="lastName"> 
            <br>
            <input type="email" id="email" class="form-control" placeholder="E-mail" autofocus required autocomplete="autocomplete" style="width:350px;" name="email">
            <br>
            <input type="text" class="form-control" placeholder="Username" autofocus required style="width:350px;" name="userName" id="userName">
            <br>
            <input type="password" id="pass" class="form-control" placeholder="Password" autofocus required style="width:350px;" name="pass">
            <input type="checkbox" id="showPass" onclick="showPass();" style="margin-left:230px;margin-top:10px;margin-bottom:10px;">Show Password
            <br>
            <input type="text" class="form-control" placeholder="Location" id="location" autofocus style="width:350px;" name="location">
            <br>
			
            <label class="custom-control custom-radio" style="margin-right:180px;">
                <input  type="radio" class="custom-control-input" value="hire" name="type" id="type1" required onclick="radioChange();">
				
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description" >HIRE</span>
            </label>
            
            <label class="custom-control custom-radio">
                <input  type="radio" class="custom-control-input" value = "work" name="type" id = "type2" required onclick="radioChange();">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">WORK</span>
            </label>
			<input type = "text" name="type" id= "type" hidden >
            <br>
           <input class="btn btn-primary"  value="Sign up" name="submit" id="create" style="width:325px;">
		   <div id="alert" class="alert">
		</div>
        </form>
        </center>
    </article>

	<script>
		$("#alert").slideUp();
		$("#create").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');
			var firstName = $("#firstName").val();
			var lastName = $("#lastName").val();
			var email = $("#email").val();
			var usr = $("#userName").val();
			var pass = $("#pass").val();
			var loc = $("#location").val();
			var type = $("#type").val();

			function validateEmail($email) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				return emailReg.test( $email );
			}

			if (firstName  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your first name.');
				$("#alert").slideDown(500).delay(1000).slideUp(500); console.log(firstname);
			}else if(lastName == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your last name.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(email == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your email address.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(!validateEmail(email)){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter validated email address.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(usr == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter username.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(pass == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please create password.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(loc == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your locations.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(type == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please choose which type you want to register in.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./ajaxRegister.php?task=register&firstName="+firstName+"&lastName="+lastName+"&email="+email+"&usr="+usr+"&pass="+pass+"&loc="+loc+"&type="+type,
                    success: function (data) {
						if(data == 'NEW'){
							$("#alert").addClass('alert-success');
							$("#alert").html('<strong>'+data+'</strong> Account created.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong>Username or Email already exists. Please try another one.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Problem occured</strong> Please try later.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
					}
				});
			}
		});
	</script>

</body>
</html>