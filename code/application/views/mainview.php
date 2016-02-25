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
	<link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
	<?php require('partials/navbar.php'); ?>
	<div class="container">
<?php 	foreach($rides as $ride) { ?>
		<div class="row">
			<div class="col s12 contents">
				<div class="card grey lighten-3">
					<div class="card-content black-text">
						<a class="card-title" href="/Rides/load_ride_detail/<?= $ride['id'] ?>"><h3><?= $ride['destination_name'] ?></h3></a>
						<p><?= $ride['created_at'] ?></p>
						<p><?= $ride['departure_time'] ?></p>
					</div>
					<div class="card-action">
						<a href="/Rides/join_ride/<?= $ride['id'] ?>"><button class="btn-flat">Join Ride</button></a>
					</div>
				</div>
			</div>
		</div>
<?php 	} ?>
	</div>
</body>
</html>
