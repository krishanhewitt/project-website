<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Accessing the Database</title>
		<meta charset="utf-8"
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
						<li><a href="userlogin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php } else { ?>
						<li><a class="navbar-brand" href="index.php"><?echo $_SESSION["name"]?></a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	
	
	<?php
		
		if ((filter_input(INPUT_POST, 'fname')) ||
        (filter_input(INPUT_POST, 'lname')) ||
        (filter_input(INPUT_POST, 'email')) ||
        (filter_input(INPUT_POST, 'usrtel'))){
			
			$mysqli = mysqli_connect("localhost", "khewitt_myDB", "letmein123", "khewitt_myDB");
			
			
			$fname = filter_input(INPUT_POST, 'fname');
			$lname = filter_input(INPUT_POST, 'lname');
			$email = strtolower(filter_input(INPUT_POST, 'email'));
			$phone = filter_input(INPUT_POST, 'usrtel');
					
			
				$sql = "INSERT INTO users (f_name, l_name, email, phone) "
				. "VALUES ('" . $fname . "', '" . $lname . "', '" . $email . "', '" . $phone . "')";
				
				$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
			
			if ($result) {
				echo "\r\n New record created successfully";
				} else {
				echo "Error inserting table";
			}
			
			
			$sql = "SELECT * FROM users";
			$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
			
			
		?>
		<br>
		<br>
		<body style="background-color:#CDCDCD;" id="block" class="center">
			<table>
				<thead>
					<tr>
						<td><strong>First Name</strong></td>
						<td><strong>Last Name</strong></td>
						<td><strong>Email</strong></td>
						<td><strong>Phone</strong></td>
					</tr>
				</thead>
				<tbody>
					
					<?php
						while($row = mysqli_fetch_array($result)) {
							
						?>
						<tr>
							
							<td><?php echo $row['f_name']?></td>
							<td><?php echo $row['l_name']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['phone']?></td>
							
						</tr>
						
						<?php
						}
					?>
				</tbody>
			</table>
		</body>
		
		<?php
		}
	?>
	
	
</html>


