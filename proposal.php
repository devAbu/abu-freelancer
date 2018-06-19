<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style-home.css" type="text/css" rel="stylesheet" >
    <title>Submit a proposal</title>
    <link rel="shortcut icon" href="images/icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>


    <script>
    function cal(){
        
        var bid = document.getElementById("bid").value;
        var fee = bid * 0.1;
        var paid = bid - fee;
        document.getElementById("fee").value = fee;
        document.getElementById("get").value = paid;
    }
    </script>
    
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

    <h1 style="font-size:35px; margin-left:450px;" >Submit a Proposal</h1>

    <article style="margin-left:30px;">
        <h3>Job Details</h3>
        <hr style="max-width:500px; margin-right:850px;">
        
        <form> <!-- action = "getDataProposal.php" method = "POST"-->

        <h4 >Job Title</h4>
        <p>Job Description</p>
    

   
        <h3 style="margin-top:30px;margin-bottom:20px;">Terms</h3>
        <label>Client's Budget:</label>
        <label  style="margin-left:100px;">150$</label>

        <p>What is the amount you'd like to bid for this job?</p>
        <span style="font-size:20px;">Your bid:</span> <input type="number" onchange="cal();" name="bid"   id="bid" class="form-control" style="max-width:250px; margin-top:10px;"> <br>
        <span style="font-size:20px;" >Our Fee (10%):</span><input type="number" id="fee" name="fee" readonly class="form-control" style="max-width:250px; margin-top:10px;"><br>
        <span style="font-size:20px;">You'll paid:</span> <input type="number" name="get"  id="get" readonly class="form-control" style="max-width:250px; margin-top:10px;">

        <h3>Additional information</h3>
        <br>
        <p style="font-size:18px;">Cover Letter</p>
        <textarea cols="100" rows="15" name="cover" id="cover">

        </textarea>
        
   <br>

    <input id="prop" name="insert" value="Submit a proposal"   class="btn btn-success btn-lg">
   <input id="cancel" value="Cancel" style="margin-left:20px;" class="btn btn-danger btn-lg" onclick="window.history.go(-1)">
   <div id="alert" class="alert">

   </div>
   </form>

   
 </article>

 <script>
		$("#prop").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');

			var bid = $("#bid").val();
			var fee = $("#fee").val();
			var get = $("#get").val();
			var cover = $("#cover").val();
			if (bid  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your bid.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else if(cover == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your cover.');
				$("#alert").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./ajaxProposal.php?task=prop&bid="+bid+"&fee="+fee+"&get="+get+"&cover="+cover,
                    success: function (data) {
						if(data == 'send'){
							$("#alert").addClass('alert-success');
							$("#alert").html('<strong>'+data+'</strong> Proposal Sent Successfully.');
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

		$("#cancel").click(function(){
			$("#bid").val('');
			$("#fee").val('');
			$("#get").val('');
			$("#cover").val('');
		});
</script>
</body>
</html>