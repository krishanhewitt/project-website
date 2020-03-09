<?php
session_start();
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Suggestions with AJAX</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="mysheet.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
			<script>
				function showHint(str) {
					if (str.length == 0) {
						document.getElementById("txtHint").innerHTML = "";
						return;
					} else {
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
									document.getElementById("txtHint").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "ajaxPHP.php?q=" + str, true);
						xmlhttp.send();
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
							<li class="active"><a href="ajaxDir.php">AJAX</a></li>
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
		
		
		<body>
		<div id="block">
		<div class="center">
				<h3>AJAX demo using PHP</h3>
			<br>
			<p><b>Start typing the make of a car in the input field below:</b></p>
			<form>
				<input type="text" onkeyup="showHint(this.value)">
			</form>
			<br>
			<p>Suggestions: <span id="txtHint"></span></p>
			</div>
			</div>
		</body>
		
	</html>