<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Post a job</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>


    <script>
        function func(){
            window.location.replace("add-skill.html");
        }
    </script>

</head>
<body>
    <header>
        <a href="home-loged-hire.php"><img class="logo" src="images/logo.png" alt="FREELANCER"></a>

        
        <a href="posting.php" class="nav-button"><input type="button" value="Post a new job"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
        <a href="messages.php" class="nav-button"><input type="button" value="Messages"  class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px;"></a>
        
        <input  id="search-loged" type="text" placeholder="Find Freelancers..." style="margin-left:150px; margin-right:170px;">

        <a href="profile-customer.php"><img src="images/abu.jpg" alt="Profile image" style="border-radius:50%; width:80px; height:80px; " >
        <span style="font-size:17px;">Abdurahman A. </span></a>
        <select  class="custom-select">
            <option selected></option>
            <option><a href="profile.php"><img src="images/" alt="profile image">
            Abdurahman A.<br></a></option>
            <option><a href="setting-main.php"> Setting</a></option>
            <option><a href="index.php"> Log out</a></option>
        </select>
		<a href="logout.php"><input type="button" value="Log out" class="btn btn-outline-primary waves-effect btn-lg" style="border:0px; height:75px; float:right;" ></a>

    </header>
    <center>
        <h1 style="font-size:40px; margin-top:30px;">Post a job</h1>
    </center>

    <article  style="margin-left:20px;">
        <h3 style="font-size:30px; margin-bottom:20px;">Job Details</h3>
        
        <form> <!-- action = "getDataPost.php" method = "POST" -->
        <input type="text" placeholder="Job title" name="title" id="jobTitle" class="form-control" style="width:365px;" required>
        <br>
        <textarea class="form-control form-rounded" name="description" id="jobDesc" style="max-width:365px; margin-bottom:20px;" required>

        </textarea>
        
    

        <h3 style="font-size:30px; margin-bottom:20px;">Additional information</h3>
        <label style="margin-right:80px;">Enter your budget for this job:</label>
        <input type="number" id="usrB" name="budget" placeholder="0" style="max-width:70px; height:30px; margin-bottom:30px; margin-top:-35px; margin-left:295px;" class="form-control" required>
        <label style="margin-right:30px;">Which skills are needed for your job?</label>
        <input type="button" value="ADD" style="margin-bottom:30px; width:70px;" class="btn btn-success btn-lg" onclick="func();" >
        <p>Enter the project length:</p>
        <input type="date" min="2017-11-05" name="date" id="deadline" max="2018-01-01" style="margin-bottom:10px;" required> 
        <br>
        <input  value="Post" name="insert" id="post" class="btn btn-success">
		<div id="alert" class="alert">
		</div>
        </form>
    </article>

	<script>
		$("#alert").slideUp();
		$("#post").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');	
			var jobTitle = $("#jobTitle").val();
			var jobDesc = $("#jobDesc").val();
			var usrB = $("#usrB").val();
			var deadline = $("#deadline").val();

			if (jobTitle  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter title of the job.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(jobDesc == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter job description.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(usrB == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your budget.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(deadline == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter deadline for the job.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./ajaxPost.php?task=post&jobTitle="+jobTitle+"&jobDesc="+jobDesc+"&usrB="+usrB+"&deadline="+deadline,
                    success: function (data) {
						if(data == 'post'){
							$("#alert").addClass('alert-success');
							$("#alert").html('<strong>'+data+'</strong> Job posted Successfully.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> Please try later.');
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