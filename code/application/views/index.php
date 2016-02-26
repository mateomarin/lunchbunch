<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Munch Bunch</title>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<!-- Navigation JS -->
	<script src="assets/js/nav.js"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="/assets/css/landing.css">
</head>
<body>
	<?php require('partials/navbar2.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col s12 card-wrapper">
				<div class="card grey lighten-3">
					<div class="card-content black-text">
						<span class="card-title">Have Lunch With Us</span>
						<p>Connecting friends with lunch</p>
					</div>
					<div class="card-action">
						<a class="waves-effect waves-light modal-trigger" href="#modal2">Sign Up</a>
  						<a class="waves-effect waves-light modal-trigger" href="#modal1">Log In</a>
					</div>
				</div>
			</div>
		</div>
        <div class="fullscreen-bg">
            <video loop muted autoplay id="bgvid">
                <source src="assets/vid/MBV2.mp4" type="video/mp4">
            </video>
        </div>

		<div class="row">            
		</div>
	<!-- Modal Structure Goes Here -->
	<?php require('partials/lrmodals.php'); ?>
	</div>
</body>
</html>
