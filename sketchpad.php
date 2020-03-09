<?php
	session_start();
?>

<!DOCTYPE html>

	<html lang="en">
<head>
	<title>Drawing App</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mysheet.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
	
	<script>
		var canvas;
		var ctx;
		
		var mouseX;
		var mouseY;
		var mouseDown = 0;
		
		var lastX = -1;
		var lastY = -1;
		
		var touchX;
		var touchY;
		
		var pSize;
		var pColor;
			
		function drawDot(ctx, x, y, size) {
		
			if(lastX == -1) {
				lastX = mouseX;
				lastY = mouseY;
			}
			
			r=0; g=0; b=0; a=255;
			
			//ctx.strokeStyle = "rgba(" + r + "," + g + "," + b + "," + (a/255)+ ")";
			ctx.lineCap = "round";
			ctx.beginPath();
			ctx.moveTo(lastX, lastY);
			ctx.lineTo(x, y);
			ctx.lineWidth = pSize;
			ctx.setStrokeColor = pColor;
			ctx.stroke();
			
			lastX = x;
			lastY = y;
		}
		
		function clearCanvas(canvas,ctx) {
			ctx.clearRect(0, 0, canvas.width, canvas.height);
		}
		
		function sketchpad_mouseDown() {
			mouseDown = 1;
			drawDot(ctx, mouseX, mouseY, pSize);
		}
		
		function sketchpad_mouseUp() {
			mouseDown = 0;
			lastX = -1;
			lastY = -1;
		}
		
		function sketchpad_mouseMove(e) {
			getMousePos(e);
			
			if(mouseDown == 1) {
				drawDot(ctx, mouseX, mouseY, pSize);
			}
		}
		
		function getMousePos(e) {
			if(!e)
				var e = event;
			
			if(e.offsetX) {
				mouseX = e.offsetX;
				mouseY = e.offsetY;
			}
			else if(e.layerX) {
				mouseX = e.layerX;
				mouseY = e.layerY;
			}
		}
		
		function sketchpad_touchStart() {
			getTouchPos();
			drawDot(ctx, touchX, touchY, pSize);
			event.preventDefault();
		}
		
		function sketchpad_touchMove(e) {
			getTouchPos(e);
			drawDot(ctx, touchX, touchY, pSize);
			event.preventDefault();
		}
		
		function sketchpad_touchEnd() {
			lastX = -1;
			lastY = -1;
		}
		
		function pensize_change() {
			pSize = document.getElementById("penSize").value;
		}
		
		function pencolor_change() {
			pColor = document.getElementById("penColor").value;
		}
		
		function getTouchPos(e) {
			if(!e)
				var e = event;
				
			if(e.touches) {
				if(e.touches.length == 1) {
					var touch = e.touches[0];
					touchX = touch.pageX - touch.target.offsetLeft;
					touchY = touch.pageY - touch.target.offsetTop;
				}
			}
		}
		
		function init() {
			canvas = document.getElementById("sketchpad");
			pSize = document.getElementById("penSize").value;
			pColor = document.getElementById("penColor").value;
			
			if(canvas.getContext)
			ctx = canvas.getContext("2d");
		
			if(ctx) {
				canvas.addEventListener('mousedown', sketchpad_mouseDown, false);
				canvas.addEventListener('mousemove', sketchpad_mouseMove, false);
				document.body.addEventListener('mouseup', sketchpad_mouseUp, false);
				
				canvas.addEventListener('touchstart', sketchpad_touchStart, false);
				canvas.addEventListener('touchmove', sketchpad_touchMove, false);
				canvas.addEventListener('touchend', sketchpad_touchEnd, false);
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
					<li class="active"><a href="sketchpad.php">Drawing App</a></li>
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


<body onload="init()" style="background-color:#CDCDCD;">

	
	<h1>Sketchpad</h1>

	<div id="sketchpadapp" class="center">
		<table>
			<thead>
				<tr>
					<th class="center">Draw something!</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<canvas id="sketchpad" width="500" height="400"></canvas>
					</td>
				</tr>
				<tr>
					<td>
						<p><strong>Pen size:</strong> <input id="penSize" type="number" value="6" min="2" max="32" step="2" onclick="pensize_change();"></p>
					    <p><strong>Pen color:</strong> <input id="penColor" type="color" onclick="pencolor_change();"></p>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>
						<input type="submit" value="Clear Sketchpad" onclick="clearCanvas(canvas,ctx);">
						<br><br>
						<p>Created using some code from a canvas tutorial found at the URL below with some extra features I have added</p>
						<a href="https://zipso.net/a-simple-touchscreen-sketchpad-using-javascript-and-html5/" target="_blank">Sketchpad App Tutorial</a>
					</td>
				</tr>
			</tfoot>	
		</table>
	</div>
	
	
	
	
</body>



</html>