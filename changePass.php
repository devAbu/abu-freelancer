<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Change your password</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
</head>

<body>
	<article style="margin-top:13%; ">
	<center>
	<form> <!-- action= "password.php" method="post"> -->
		<h2> Change your password</h2> <br>
		<input type="text" placeholder="Enter your username" class="form-control" style="max-width:18%;" name="userName" id="name" required> <br>
		<input type="password" placeholder="Enter current password" class="form-control" style="max-width:18%;" name="currPass" id="currPass" required> <br> 
		<input type="password" placeholder="Enter new password" class="form-control" style="max-width:18%;" name="newPass" id="newPass" required> <br> 
		 
		<input id="insert" value="Save" style="margin-right:7%;" class="btn btn-success"> 
		<input id="cancel" value="Reset" class="btn btn-danger">
		</form>
		<div id="alert" class="alert">
			
		</div>
	</center>
	</article>
	<script>
		$("#alert").slideUp();
		$("#insert").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');
			var usr = $("#name").val();
			var currPass = $("#currPass").val();
			var newPass = $("#newPass").val();
			$.ajax({
			
					url: "./ajaxChangePass.php?task=chnPass&usr="+usr+"&currPass="+currPass+"&newPass="+newPass,
                    success: function (data) {
						if(data == 'DONE'){
							$("#alert").addClass('alert-success');
							$("#alert").html('<strong>'+data+'</strong> Password changed.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else if (usr  == ""){
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> Please fill the username.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else if(currPass == ""){
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> Please enter your current passsord.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else if(newPass == ""){
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> Please enter your new passsord.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Problem occured</strong> The username or password is incorrect. Please try later.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Problem occured</strong> Please try later.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
					}
				});
		});

		$("#cancel").click(function(){
			$("#name").val('');
			$("#currPass").val('');
			$("#newPass").val('');
		});
	</script>
</body>
</html>