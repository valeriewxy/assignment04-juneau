<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Assignment 04</title>
		<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type ="text/css" href="css/override.css">
		<link rel="stylesheet" type ="text/css" href="css/contact.css">
		<link rel="stylesheet" type ="text/css" href="css/animate.css">

		<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>

	<body>

		<?php $active='form';?>
		<?php include 'inc/navigation.inc';?>

		<div class="mainPageLanding">

  		<div class="video-bg-container">

  			<video autoplay muted loop id="myVideo">
  	  		<source src="images/Very-Open-Space.webm" type="video/webm">
  			</video>

  		</div>

      <div class="mainPageOverlay">
		<div class="animated fadeIn">
			<div class="container">
			<div class="headcontainer">
					<h1>Contact Us</h1>
					<span>Looking forward to hearing from you!</span>
		    </div>
					<form method="post" action="welcome.php">
						<div>
							<label for ="name">Name</label><br>
							<input type="text" type="text" name="name" id="name">
						</div>
						<div>
							<label for ="email">E-mail</label><br>
							<input id="text" type="email" name="email" id="email">
						</div>
						<div>
							<label for ="message">Message</label><br>
							<textarea id="text" rows="5", cols="50"></textarea>
						</div>
						<div>
							<input id="submit" type="submit">
						</div>
					</form>
			  </div>
      </div>
    </div>
    </div>

		
		<footer class="footer">
		  <span class="text-muted">Page created by Team Juneau</span>
		</footer>
	</body>
	
</html>
