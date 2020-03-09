<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Form Test</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mysheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
		
		<script>
			function validateForm() {
				let firstN = document.forms["myForm"]["fname"].value;
				let lastN = document.forms["myForm"]["lname"].value;
				
				if (firstN == "" || firstN == " "){ 
					document.getElementById("fn").innerHTML="You must enter characters";
					return false;
				}
				if(lastN == "" || lastN == " ") {
					document.getElementById("ln").innerHTML="You must enter characters";
					return false;
				}
			}
		</script>
	</head>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">COSC 219 Labs <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="ajaxDir.php">AJAX</a></li>
						<li><a href="jQuery.php">jQuery</a></li>
						<li><a href="formTest.php">Web Form</a></li>
					</ul>
				</li>
				<li><a href="projectPage.php">Projects</a></li>
				<li><a href="drupal.php">Drupal Sites</a></li>
				<li><a href="sketchpad.php">Drawing App</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if(!isset($_SESSION["name"])) { ?>
					<li><a href="applyaccount.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="userlogin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<?php } else { ?>
					<li><a class="navbar-brand" href="index.php"><?echo $_SESSION["name"]?></a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				<?php } ?>
			</ul>
		</div>
	</nav>
	
	<body style="background-color:#CDCDCD;">
		<div id="block" class="center">
			<h1>Form Example</h1>
			
			<p>Here is a sample form simulating an account creation using POST</p>
			
			<form name="myForm" onsubmit="return validateForm()" method="post" action="form.php">
				First name:<br>
				<input type="text" name="fname" value="" required> <span id="fn"></span>
				<br>
				Last name:<br>
				<input type="text" name="lname" value="" required> <span id="ln"></span>
				<br>
				Email:<br>
				<input type="email" name="email" value="" placeholder="sample@gmail.com" required>
				<br>
				Telephone: (include dashes)<br>
				<input type="tel" name="usrtel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
				<br>
				<br>
				<input type="submit" value="Submit">
			</form> 
			<br>
			<br>
		</div>
	</body>
	
	
	
</html>