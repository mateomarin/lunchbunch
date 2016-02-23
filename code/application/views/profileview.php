<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Munch Bunch</title>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?
        require('/partials/navbar.php');
    ?>
    
    <nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="glyphicon glyphicon-cutlery white"></span>
				</button>
				<a class="navbar-brand" href="#">Munch Bunch</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-road"></span> Create New Ride</a></li>
					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="marge btn btn-default dropdown-toggle navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-th-list"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> User Profile</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Sign Up</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
        <div class="row">
			<div class="col-xs-12">
                <form action="" method="post">
                    <h1>Account Settings</h1>
                    E-mail Address:<input type="text" name="email">
                    Password: <input type="text" name="pwrd">
                    Confirm Password: <input type="text" name="cpwrd">
                    <h1>Profile Settings:</h1>
                    First Name:<input type="text" name="first_name">
                    Last Name:<input type="text" name="last_name">
                    Make and Model of Car: <input type="text" name="maker">
                    Number of seats in your car: <input type="text" name="seat_num">
                    License Plate: <input type="text" name="license">
                    <input type="submit" value="Update Profile">
                </form>
                <a href="/"><button>Cancel</button></a>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</body>
</html>