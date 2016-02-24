<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
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
	<script>
		$(document).ready(function() {
			$(".button-collapse").sideNav();
		});
	</script>
</head>
<body>
	<?php require('/partials/navbar2.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form action="/validate_password" method="post" role="form">
					<fieldset>
						<legend>Log In</legend>
						<div class="row">
							<div class="input-field col s12">
								<label for="email">Email:</label>
								<input class="validate" type="email" name="email" id="email">
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<label for="password">Password:</label>
								<input class="validate" type="password" name="password" id="password" length="8">
							</div>
						</div>
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    						<i class="material-icons right">send</i>
  						</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>