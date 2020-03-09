<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Form</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mysheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
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
				<li class="active"><a href="applyaccount.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="userlogin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
		</nav>
	
	
	<div class="center">
		<body>
			<form method="post" action="createAccount.php">
				<fieldset> <legend><h3> Sign Up Form </h3></legend>
					
					<!--<p>Only fields marked with an astreik are required</p>
					<p>(Information can be updated later)</p>-->
					
					<div class="row">
						<!--<div class="col-md-6">-->
						<p><strong>Email:</strong><br/>
						<input type="text" name="email" required></p>
						
						<p><strong>Password:</strong><br/>
						<input type="password" name="password" required></p>
						
						<p>First Name:<br/>
						<input type="text" name="firstname" required></p>
						
						<p>Last Name:<br/>
						<input type="text" name="lastname" required></p>
						
						<!--
							<p>Address:<br/>
							<input type="text" name="address"></p>
							</div>
							<div class="col-md-6">
							
							<p>Country:<br/>
							<input type="text" name="country"></p>
							
							<p>Province/State:<br/>
							<input type="text" name="state"></p>
							
							<p>City:<br/>
							<input type="text" name="city"></p>
							
							<p>Postal Code/Zip Code:<br/>
							<input type="text" name="zip"></p>
							
							<p>Phone:<br/>
							<input type="text" name="phone"></p>
							</div>
						-->
					</div>
					<br>
					<p><input type="submit" name="submit" value="Create Account"/></p>
				</fieldset>
			</form>
		</body>
	</div>
</html>