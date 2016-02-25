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
	<!-- profileview css -->
	<link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
 <?php require('/partials/navbar.php'); ?>
	<div class="container">
        <div class="row">
			<div class="col s12">
                <form class="settings" action="" method="post">
                    <fieldset>
                    	<legend>Account Settings</legend>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="email">Email:</label>
                    			<input class="validate" type="email" name="email" id="email">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="pass">Password:</label>
                    			<input class="validate" type="password" name="password" id="pass">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="cpass">Confirm Password:</label>
                    			<input class="validate" type="password" name="passconf" id="cpass">
                    		</div>
                    	</div>
 						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
	    					<i class="material-icons right">send</i>
	  					</button>
                    </fieldset>
                </form>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<form class="settings" action="" method="post">
                    <fieldset>
                    	<legend>Profile Settings</legend>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="fname">First Name:</label>
                    			<input class="validate" type="text" name="first_name" id="fname">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="lname">Last Name:</label>
                    			<input class="validate" type="text" name="last_name" id="lname">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="phonenum">Phone #:</label>
                    			<input class="validate" type="text" name="phone_num" id="phonenum">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="car">Make and Model of Car:</label>
                    			<input class="validate" type="text" name="car" id="car">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="seats"># of seats in car:</label>
                    			<input class="validate" type="text" name="seats" id="seats">
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="input-field col s12">
                    			<label for="license">License Plate:</label>
                    			<input class="validate" type="text" name="license" id="license">
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