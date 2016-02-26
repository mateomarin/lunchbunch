<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Takeouts</title>

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
	<script src="/assets/js/nav.js"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
	<?php require('partials/navbar.php'); ?>
	<div class="container">
		<h2>Your Notifications</h2>
    <?php foreach($notifications as $notification){?>
			<div class="row">
					<div class="card grey lighten-3 card-bg col s12">
						<div class="card-content black-text col s11">
							<p><?= $notification['destination_name']?></p>
							<p><?= $notification['first_name']." ".$notification['notification']." - ".$notification['diff']?></p>
							<?php if($notification['price']!=null && $notification['notif_id']>=4){?>
								<p>$<?=$notification['fee']?> (takeout fee) + $<?= $notification['price']?> (takeout bill) = $<?= $notification['price']+$notification['fee']?> (final amount owed)</p>
								<?php }?>
						</div>

						<div class="del card red darken-4 card-bg col s1">
							<div class="card-content black-text">
								<a href="/Notifications/delete/<?= $notification['id']?>"><i class="material-icons delbtn">close</i></a>
							</div>
						</div>
					</div>
			</div>
    <?php }?>
	</div>
</body>
</html>
