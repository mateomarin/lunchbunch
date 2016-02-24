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
	<!-- My CSS -->
	<link rel="stylesheet" href="/assets/css/home.css">
	<script>
		$(document).ready(function(){
    	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    		$('.modal-trigger').leanModal();
    		// Activate the side menu 
   			$(".button-collapse").sideNav();
   
  		});
	</script>
</head>
<body>
	<?php  
		require('/partials/navbar2.php');
	?>
	<div class="container">
		
		<div class="row">
			
		</div>
	<!-- Modal Trigger -->
	<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

	<!-- Modal Structure -->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
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
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			<a href="#modal2" class=" modal-trigger modal-close waves-effect waves-green btn-flat">Don't have an account? Sign up for one!</a>
		</div>
	</div>
	<div id="modal2" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<form action="/validate_password" method="post" role="form">
						<fieldset>
							<legend>Registration</legend>
							<div class="input-field col s12">
								<label for="email">Email:</label>
								<input class="validate" type="email" name="email" id="email">
							</div>
							<div class="input-field col s12">
								<label for="first_name">First Name:</label>
								<input class="validate" type="text" name="first_name" id="first_name">
							</div>
							<div class="input-field col s12">
								<label for="last_name">Last Name:</label>
								<input class="validate" type="text" name="last_name" id="last_name">
							</div>
							<div class="input-field col s12">
								<label for="password">Password:</label>
								<input class="validate" type="password" name="password" id="password" length="8">
							</div>
							<div class="input-field col s12">
								<label for="passconf">Password Confirmation:</label>
								<input class="validate" type="password" name="confirm_pass" id="passconf" length="8">
							</div>
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit
	    						<i class="material-icons right">send</i>
	  						</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			<a href="#modal1" class=" modal-trigger modal-close waves-effect waves-green btn-flat">Already Registered? Log In!</a>
		</div>
	</div>
</body>
</html>