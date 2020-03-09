<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Projects</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mysheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
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
				<li class="active"><a href="projectPage.php">Projects</a></li>
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
		<!--	Nav bar for shortcuts to blocks
		<div class="sidenav" style="width:25%">
			<a href="#msDiv">Minesweeper</a>
  			<a href="#mosaicDiv">Mosaic Generator</a>
 			<a href="#makeTeamDiv">Visual Basic app</a>
			<a href="#codingameDiv">Bot Programming</a>
		</div>
		<div style="margin-left:140px">
		-->
		<div class="center">
			<h1>Projects</h1>
		</div>
		<div id="block">
			<div id="msDiv">
				<fieldset>
					<legend><h3>Minesweeper</h3></legend>
					<p>The goal with this project was to recreate the classic Minesweeper game using only Java and JavaFX</p>
					<p>The screenshots below show a few games at different states</p>
					
					<div class="row row-no-margin">
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/minesweeper1.PNG" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">
							<img src="resources/minesweeper2.PNG" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">
							<img src="resources/minesweeper3.PNG" class="img-responsive">
						</div>
					</div>
				</fieldset>
			</div>
		</div>
		<br>
		<div id="block">
			<div id="mosaicDiv">
				<fieldset>
					<legend><h3>Mosaic Generator</h3></legend>
					<p>This program I wrote will take an input image, and generate a mosaic using a collection of various pictures</p>
					<p>Here is a 26MB mosaic of George Costanza</p>
					
					<div class="row row-no-margin">
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/preCostanza.jpg" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">
							<img src="resources/postCostanza.jpg" class="img-responsive">
						</div>
					</div>
					<br>
					<p style="font-size:20px">Below are some pictures showing the detail of the mosaic</p>
					<div class="row row-no-margin">
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/costanzaZoom2.PNG" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/costanzaZoom3.PNG" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/costanzaZoom4.PNG" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-no-padding">	
							<img src="resources/costanzaZoom5.PNG" class="img-responsive">
						</div>
					</div>
				</fieldset>
			</div>
		</div>
		<br>
		<div id="block" class="center">
			<div id="makeTeamDiv">
				<fieldset>
					<legend><h3>Make a Team App</h3></legend>
					<p>For this project we had to create an app in Visual Studio with VB.NET that could be used by the organizer of a game/sport league manager to create or view teams of players.</p>
					<p>This is what the app would look like after loading in another user's team file</p>
					<div class="row">
						<div>	
							<img src="resources/makeTeam2.PNG">
						</div>	
					</div>
				</fieldset>
			</div>
		</div>
		<br>
		<div id="block" class="center">
			<div id="codingameDiv">
				<fieldset>
					<legend><h3>Bot Programming Competition</h3></legend>
					<p>The website <a href="codingame.com">codingame.com</a> is a popular place for people to compete in various coding challenges. 
					The challenge I participated in is based around a soccer-like game (Quidditch if you are familar with Harry Potter) where you calculate the logic for your players based on
					the entities and variables they will interact with</p>
					<br>
					<h4>First submission</h4>
					<p>In my first year of college I wrote my logic in java and was placed in the "Silver" tier (middle of the ranking system)</p>
					<div class="row">
						<img src="resources/javaBits.png" class="img-responsive">
						<br>
						<h4>Second submission</h4>
						<p>While learning c++ in my second year, I re-attempted the challenge and was placed in the "Gold" tier (above average)</p>
						<img src="resources/cppBits.png" class="img-responsive">
					</div>
				</fieldset>
			</div>			
		</div>
		<br>	
	</body>
</html>