<?php
	session_start();
	
	//check for required fields from the form
	if ((!filter_input(INPUT_POST, 'email')) || (!filter_input(INPUT_POST, 'password'))) {
		header("Location: userlogin.html");
		exit;
	}
	
	$mysqli = mysqli_connect("localhost", "khewitt_admin", "letmein123", "khewitt_userDB");
	
	
	$targetemail = filter_input(INPUT_POST, 'email');
	$targetpasswd = filter_input(INPUT_POST, 'password');
	$sql = "SELECT first_name, last_name, email FROM users WHERE email = '".$targetemail."' AND password = '".$targetpasswd."'";
	
	$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
	
	//get the number of rows in the result set, should be 1 if a match
	if (mysqli_num_rows($result) == 1) {
		
		//if authorized, get the values of f_name l_name
		while ($info = mysqli_fetch_array($result)) {
			$f_name = stripslashes($info['first_name']);
			$l_name = stripslashes($info['last_name']);
		}
		
		$username = $f_name . " " . $l_name;
		$_SESSION["name"] = $username;
		
		//create display string
		$display_block = "
        <body>
		<strong><h2>Welcome " . $username . "!</h2></strong>
        </body>";
		} else {
		echo "unable to login";
		//redirect back to login form if not authorized
		header("Location: userlogin.html");
		exit;
	}
?>
<html>
    <head>
        <title>User Login</title>
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
					<li><a href="projectPage.php">Projects</a></li>
					<li><a href="drupal.php">Drupal Sites</a></li>
					<li><a href="sketchpad.php">Drawing App</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(!isset($_SESSION["name"])) { ?>
						<li><a href="applyaccount.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li class="active"><a href="userlogin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php } else { ?>
						<li><a class="navbar-brand" href="index.php"><?echo $_SESSION["name"]?></a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	
    <body style="background-color:#CDCDCD;">
		<div id="block" class="center">
			<?php echo "$display_block";?>	
			<br>
			<a href="index.php" class="btn btn-default">Go back home</a>
			<br><br>
			<a href="#" class="btn btn-default">View your account</a>
			<p>(Not implemented yet)</p>
		</div>
	</body>
</html>

