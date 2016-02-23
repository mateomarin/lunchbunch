<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/assets/css/login.css">
</head>
<body>
	<?php require('/partials/navbar.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form action="/validate_password" method="post" role="form">
					<fieldset>
						<legend>Registration</legend>
						<div class="form-group">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" id="email">
						</div>
						<div class="form-group">
							<label for="first_name">First Name:</label>
							<input class="form-control" type="text" name="first_name" id="first_name">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name:</label>
							<input class="form-control" type="text" name="last_name" id="last_name">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input class="form-control" type="password" name="password" id="password">
						</div>
						<div class="form-group">
							<label for="passconf">Password Confirmation:</label>
							<input class="form-control" type="password" name="confirm_pass" id="passconf">
						</div>
						<button type="submit" class="btn btn-info">Log In</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>