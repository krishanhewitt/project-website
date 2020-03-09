<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mysheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
	</head>
	
	<body style="background-color:#CDCDCD;">
		
		
		
		
		<div id="bannerimage">
		</div>
		<br>
		
		<div class="jumbotron text-center" style="margin-bottom:0">
			<img src="resources/klogo.png">
		</div>
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
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
		
		<div id="frontPage">
		<div id="block" class="center">
			<h3>Below I have summarized some of the features added to this website</h3>
			<br>
			<ul>
				<li>A display of some of my projects: <a href="projectPage.php">Project Page</a></li>
				<br>
				<li>Some of the drupal websites I have created: <a href="drupal.php">Drupal Page</a></li>
				<br>
				<li>A user account system connected to a database: <a href="applyaccount.php">Sign up</a>, <a href="userlogin.html">Login</a></li>
				<br>
				<li>A validated form that generates a report: <a href="formTest.php">Form Example</a></li>
				<br>
				<li>A collection of AJAX/jQuery examples created for a class :
					<a href="ajaxDir.php">AJAX</a>, 
					<a href="jQuery.php">jQuery</a>
				</li>
				<br>
				<li>A drawing app written in JavaScript: <a href="sketchpad.php">Sketchpad</a></li>
			</ul>
		</div>
		</div>
		<br>
		
		
		
	</body>
	
	<br><br>
	<div class="center">
		<p>I should acknowledge that certain things such as the nav bar and other features have a lot of similarity to their examples on W3Schools.com</p>
		<p>On my website they are personalized as much as possible to get a better understanding of how they work</p>
	</div>
	
	
</html>