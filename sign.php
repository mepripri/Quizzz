<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Awesome App Template built with Bootstrap Framework and Paperkit for creating App Landing Pages by TemplateFlip.com"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis:600|Roboto:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/paper-kit.css?v=2.1.0" rel="stylesheet">
    <link type="text/css" href="header/styles/main.css" rel="stylesheet"> 
<script>
    function checkForm() 
    { 
        var fname = document.getElementById("fname1").value;
        var em = document.getElementById("em1").value;
        var pass = document.getElementById("pass1").value;
        var user = document.getElementById("user1").value;
        if (fname == '' || em == ''|| pass == '' || user == '')
        {
            alert("Fill All Fields");
        } 
        else 
        {
            var fname1 = document.getElementById("fname").innerHTML;
            var em1 = document.getElementById("em").innerHTML;
            var user1 = document.getElementById("user").innerHTML;
            var pass1 = document.getElementById("pass2").innerHTML;
            if (fname1 == 'Enter First Name' || em1 == 'Invalid Email' || user1 == 'Enter username' || pass1 == 'Password too short') 
            {
                alert("Please enter Valid Information");
            } 
            else 
            {
                document.getElementById("myForm").submit();
            }
        }
    }
    function validate(field, query) 
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
          {
              document.getElementById(field).innerHTML = xmlhttp.responseText;
          } 
        }
        xmlhttp.open("GET", "validation2.php?field=" + field + "&query=" + query, true);
        xmlhttp.send();
    }

</script>

</head>
<body>
	 
      <div style="background-image:url('header/images/home-image.jpg');background-size: 100%">
        <nav class="navbar navbar-expand-md navbar-transparent" style="padding-bottom: 22px;">
          <div class="container"><a class="navbar-brand px-0 py-0" style="font-size: 40px;font-family: 'Dosis', 'Helvetica', Arial, sans-serif;"; href="index.html">Quizzes</a>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="cricket.php">Quizzes</a></li>
                <li class="nav-item"><a class="nav-link" href="score.php">Scores</a></li>
                <li class="nav-item"><a class="btn btn-outline-neutral btn-round" href="sign.php">Signup/Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <center>
	<div style="background-image:url('header/images/home-image.jpg');background-size: 100%;">
		<div class="container-contact1" style="max-width: 800px;padding: 50px 200px;">

			<form class="contact1-form validate-form" action='signup.php' id="myForm" method='POST' name="myForm" autocomplete="off">
				<p class="contact1-form-title" style="text-align: center;font-size: 30px;">
					Register
				</p>

				<div class="wrap-input1 validate-input">
					<input class="input1" id="fname1" type="text" name="fname1" placeholder="Name" onkeyup="validate('fname', this.value)">*
					<div id='fname' style="display: inline-block;"></div>
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" id="em1" type="text" name="em1" placeholder="Email" onkeyup="validate('em', this.value)">*
					<div id='em' style="display: inline-block;"></div>
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" id="user1" type="text" name="user1" placeholder="Username" onkeyup="validate('user', this.value)">*
					<div id='user' style="display: inline-block;"></div>
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" id="pass1" type="password" name="pass1" placeholder="Password" onkeyup="validate('pass2', this.value)">*
					<div id='pass2' style="display: inline-block;"></div>
				</div>

				<table>
					<td><button class="contact1-form-btn" onclick="checkForm()" value='Create Account' name="submit">Create Account</button></td>
					<td><button class="contact1-form-btn" name="login" value='Login'>Login</button></td>
				</table>
			</form>
		</div>
	</div>
    <div style="background-image:url('header/images/home-image.jpg');background-size: 100%;padding-bottom: 20%">
    </div>
</center>
</body>
</html>
