<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>jQuery Demo</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mysheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
		<script>
			$(document).ready(function(){
				$("#sButton").click(function(){
					$("#sun").fadeToggle();
				});
				$("#mButton").click(function(){
					$("#moon").fadeToggle();
				});
				
			});
		</script>
	</head>
	
	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">COSC 219 Labs <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="ajaxDir.php">AJAX</a></li>
							<li class="active"><a href="jQuery.php">jQuery</a></li>
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
			<div class="jq">
				
				<h1>jQuery</h1>
				
				<table style="width:100%; display:block; float:right; margin: 0 auto">
					<tr>
						<td><button id="sButton">Click to bring out the sun</button></td>
						<td><button id="mButton">Click to bring out the moon</button></td>
					</tr>
					
					<tr>
						<td style="width:365px; height: 370px">
							<div id="sun" style="display:none">
								<img src="resources/sun.png" alt="Clipart Sun">
							</div>
						</td>
						
						<td style="width:50%">
							<div id="moon" style="display:none">
								<img src="resources/moon.jpg" alt="Cartoon Moon">
							</div>
						</td>
					</tr>
					
				</table>	
				
				<p>In this example, I am using the jQuery library to call a function called fadeToggle on button click that will either hide or show the image associated with it</p>
				
			</div>
		</div>
		
		
	</body>
	
	
</html>
