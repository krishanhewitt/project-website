<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<html lang="en">
		<head>
			<title>Drupal</title>
			<meta charset="utf-8"
			<link rel="stylesheet" type="text/css" href="mysheet.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
		</head>
		
		<body style="background-color:#CDCDCD;">
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
						<li class="active"><a href="drupal.php">Drupal Sites</a></li>
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
			
			<div class="center">
					<div class="container">
						<h2>Intro to Drupal</h2>  
						<p>The first site I built was mainly a introduction to the different componenets of this CMS since we were following a textbook called "Drupal 7 Explained" by Stephen Burge. Each chapter covered a topic from below and had us practicing the common uses for it. The textbook had us playing around with the different features such as: </p>
						<ul>
							<li>Installation/Administration</li>
							<li>Content</li>
							<li>Fields</li>
							<li>Taxonomy</li>
							<li>Modules</li>
							<li>Menus</li>
							<li>Themes</li>
							<li>Blocks</li>
							<li>Views</li>
						</ul>
						<h4>These screenshots show the progress of the site throughout this assignment</h4>
						
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
								<li data-target="#myCarousel" data-slide-to="5"></li>
							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<img src="resources/drupal1.png" alt="Drupal 1" style="width:100%;">
									</div>
									
								<div class="item">
									<img src="resources/drupal2.png" alt="Drupal 2" style="width:100%;">
								</div>
								
								<div class="item">
									<img src="resources/drupal3.png" alt="Drupal 3" style="width:100%;">
								</div>
								
								<div class="item">
									<img src="resources/drupal5.png" alt="Drupal 5" style="width:100%;">
								</div>
								
								<div class="item">
									<img src="resources/drupal6.png" alt="Drupal 6" style="width:100%;">
								</div>
								
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<br>
					</div>
				
					<br>
					<br>
					<br>
					
					<div class="container">
						<h2>Drupal Final Project</h2>  
						<p>The other site I built was for the final project of that class. We had a lot of freedom on what we created but the professor gave us a list of these minimum requirements that he wanted to see: </p>
						
						<ul>
							<li>Add https protocol support</li>
							<li>Add a theme with a banner display showing relevent images to your site</li>
							<li>Custom side bar with a navigation menu, map, poll, and customized block of your choice</li>
							<li>All pages/articles must show the <strong>Share</strong> and <strong>Print/Mail</strong> buttons</li>
							<li>At least 4 basic main menu items</li>
							<li>A bonus feature (I chose to ask the user a Captcha question when logging in)</li>
						</ul>
						<h4>These screenshots show the different features I added to my project</h4>
						<div id="myCarousel2" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel2" data-slide-to="1"></li>
								<li data-target="#myCarousel2" data-slide-to="2"></li>
								<li data-target="#myCarousel2" data-slide-to="3"></li>
								<li data-target="#myCarousel2" data-slide-to="4"></li>
								<li data-target="#myCarousel2" data-slide-to="5"></li>
								<li data-target="#myCarousel2" data-slide-to="6"></li>
							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<img src="resources/drupalfinal1.PNG" alt="Drupal 1" style="width:100%;">
									<div class="carousel-caption">
										<h3>Home Page</h3>
										<p>For my final project I tried to recreate a popular FaceBook car enthusiast club</p>
									</div>
								</div>
								
								<div class="item">
									<img src="resources/drupalfinal2.PNG" alt="Drupal 2" style="width:100%;">
									<div class="carousel-caption">
										<h3>Photo Gallery</h3>
										<p>This is a photo gallery made using just Views and Content Types</p>
									</div>
								</div>
								
								<div class="item">
									<img src="resources/drupalfinal3.PNG" alt="Drupal 3" style="width:100%;">
									<div class="carousel-caption">
										<h3>Contact Us</h3>
										<p>A simple page for users wishing to reach out to an Admin</p>
									</div>
								</div>
								
								<div class="item">
									<img src="resources/drupalfinal4.PNG" alt="Drupal 4" style="width:100%;">
									<div class="carousel-caption">
										<h3>User Forum</h3>
										<p>Various discussion threads based around the theme of the website</p>
									</div>
								</div>
								
								<div class="item">
									<img src="resources/drupalfinal6.PNG" alt="Drupal 6" style="width:100%;">
									<div class="carousel-caption">
										<h3>Moderator Application</h3>
										<p>This form is sent to the Admin's email upon submission for approval</p>
									</div>
								</div>
								
								<div class="item">
									<img src="resources/drupalfinal7.PNG" alt="Drupal 6" style="width:100%;">
									<div class="carousel-caption">
										<h3>Captcha on login</h3>
										<p>My bonus feature was adding a captcha question when logging in</p>
									</div>
								</div>
							</div>
							
							<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel2" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<br><br><br><br>
				</body>
				
			</html>
			
			
			
			
			
			
			
				