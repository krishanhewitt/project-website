<?php
	session_start();
	$mysqli = mysqli_connect("localhost", "khewitt_admin", "letmein123", "khewitt_userDB");
	
	if ((filter_input(INPUT_POST, 'email')) && (filter_input(INPUT_POST, 'password'))){
		
		$email = strtolower(filter_input(INPUT_POST, 'email'));
		$pword = filter_input(INPUT_POST, 'password');
		$fname = filter_input(INPUT_POST, 'firstname');
		$lname = filter_input(INPUT_POST, 'lastname');
		$address = filter_input(INPUT_POST, 'address');
		$city = filter_input(INPUT_POST, 'city');
		$country = filter_input(INPUT_POST, 'country');
		$state = filter_input(INPUT_POST, 'state');
		$zip = filter_input(INPUT_POST, 'zip');
		$phone = filter_input(INPUT_POST, 'phone');
		$date = date('y-m-d');
		
		$sql = "SELECT email FROM users WHERE email = '" . $email . "'";
		$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
		
		if (mysqli_num_rows($result) == 1) {
			echo "Your email address has already been used! Please use a different email address for a new account";
			echo '<br><a href="applyaccount.php">Go Back</a>';
			header("Location: applyaccount.php");
			exit;
			} else {
			
			$sql = "INSERT INTO users (email, join_date, password, last_name, first_name, address, city, country, state, zip, phone) "
            . "VALUES ('" . $email . "', '" . $date . "', '" . $pword . "', '" . $lname . "', '" . $fname . "', '" . $address . "'
			, '" . $city . "', '" . $country . "', '" . $state . "', '" . $zip . "', '" . $phone . "')";
			
			$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
			
			if ($result) {
				$display_block = "
				<body>
				<strong><h2>Your account at " . $email . " has just been created. Thank you for joining us!</h2></strong>
				</body>";
				} else {
				$display_block = "
				<body>
				<strong><h2>Error creating account, please try again later</h2></strong>
				</body>";
			}
		}
	}
?>


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
	
	
	<body style="background-color:#CDCDCD;">
		<div id="block" class="center">
			<?php echo "$display_block";?>	
			<br>
			<a href="index.php" class="btn btn-default">Go back home</a>
			<br><br>
			<a href="userlogin.html" class="btn btn-default">Login to your account</a>
		</div>
	</body>
</html>