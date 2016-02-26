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
<?php 	foreach($rides as $ride) { 
			$passenger = 0;      ?>
		<div class="row">
			<div class="col s12">
				<div class="card grey lighten-3 card-bg">
					<div class="card-content black-text">
						<a class="title" href="/Rides/load_ride_detail/<?= $ride['ride_id'] ?>"><h3 class="card-title center-align"><?= $ride['destination_name'] ?></h3></a>
						<p><?= $ride['first_name'] . ' ' . $ride['last_name'] ?></p>
						<p><?= $ride['departure_time'] ?></p>
					</div>
<?php   	foreach($user_rides as $u_ride) { 
				if ($ride['ride_id'] === $u_ride['id']) { 
					$passenger = 1;
				}	
			} ?>
<?php 		if ($ride['user_id'] !== $this->session->userdata('id')) {
				if ($passenger === 0) { ?>
					<div class="card-action">
						<a href="/Rides/join_ride/<?= $ride['ride_id'] ?>">Join Ride</a>
					</div>
<?php			} else { ?>
					<div class="card-action">
						<a href="/Rides/unjoin_ride/<?= $ride['ride_id'] ?>">Unjoin Ride</a>
					</div>
<?php    		  }	 
			}	?>
				</div>
			</div>
		</div>
<?php 	} ?>
	</div>
</body>
</html>
