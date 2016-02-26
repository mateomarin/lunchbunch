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
		<div class="row">
			<div class="amber darken-4 header">
				<h4 class="center-align notif-heading white-text">Takeout Orders Placed by You</h4>
			</div>
		</div>
    <?php if($takeouts_ordered!=array()){
			foreach($takeouts_ordered as $takeout){?>
				<div class="row">
					<div class="col s12 center-align transparent-bg">
							<p class="bold"><?= $takeout['destination_name']?></p>
							<p>Date: <?= $takeout['created_at']?></p>
							<p>Order: <?= $takeout['description']?></p>
							<p>Driver: <?= $takeout['first_name']?></p>
							<div class="col s12 center-align">
								<?php if($takeout['driver_accepts']==0){?>
									<p class="waiting">Waiting for driver to accept...</p>
									<?php } else {
										if($takeout['payment_stat']==0 && $takeout['price']!=null){?>
											<p class="red-font">Total Amount Owed: $<?= $takeout['price']?></p>
											<p class="notpaid">NOT PAID</p>
											<?php } else if($takeout['payment_stat']==0 && $takeout['price']==null){?>
												<p>Waiting for driver to input final amount owed...</p>
												<?php } else{?>
													<button class="btn-flat disabled">PAID!</button>
													<?php } }?>
							</div>
					</div>
				</div>
    <?php } }?>
    	<div class="row">
    		<div class="amber darken-4 header">
				<h4 class="center-align notif-heading white-text">Takeout Orders Received from Friends</h4>
			</div>
		</div>
    <?php if($takeouts_received!=array()){
			foreach($takeouts_received as $takeout){?>
				<div class="row">
					<div class="col s12 center-align transparent-bg">
							<p class="bold"><?= $takeout['destination_name']?></p>
							<p>Date: <?= $takeout['takeout_date']?></p>
							<p>Order: <?= $takeout['description']?></p>
							<p>Friend who Ordered: <?= $takeout['first_name']?></p>
					</div>
					<div class="col s12 center-align transparent-bg">
						<?php if($takeout['driver_accepts']==0){?>
						<a href="/Takeouts/driver_accepts/<?= $takeout['id']?>"><button class="btn magic-btn" type="button" name="button">Accept Takeout</button></a>
						<?php } else {
							if($takeout['payment_stat']==1){?>
								<div class="paid">
									<button class="btn-flat disabled">PAID!</button>
								</div>
								<?php } else {
							if($takeout['price']==null){?>
								<form class="form" action="/Takeouts/update_final_price" method="post">
									<input type="hidden" name="takeout_id" value="<?= $takeout['id']?>">
									<input type="hidden" name="takeout_fee" value="<?= $takeout['takeout_fee']?>">
									<label id="amount-owed" for="price">Final Amount Owed:</label>
									<input type="text" name="price" value="">
									<input class="btn magic-btn" type="submit" name="name" value="Update">
								</form>
								<?php } else {?>
									<a href="/Takeouts/update_as_paid/<?= $takeout['id']?>"><button class="btn magic-btn" type="button" name="button">Mark as Paid</button></a>
									<a href="/Takeouts/remind/<?= $takeout['id']?>"><button class="btn magic-btn" type="button" name="button">Remind Friend</button></a>
									<?php if($this->session->flashdata('reminder')==$takeout['id']){?><label id="reminder">Reminder has been sent!</label><?php }?>
									<?php } } }?>
					</div>
				</div>
    <?php } }?>
	</div>
</body>
</html>
