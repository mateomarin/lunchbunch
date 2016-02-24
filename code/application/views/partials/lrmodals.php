	<!-- Modal Structure -->
	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h3 class="center-align heading">Log In</h3>
					<form class="col s12" action="/validate_password" method="post" role="form">
						<div class="input-field col s12">
							<i class="material-icons prefix">mail</i>
							<label for="email">Email:</label>
							<input class="validate" type="email" name="email" id="email">
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">lock_outline</i>
							<label for="password">Password:</label>
							<input class="validate" type="password" name="password" id="password">
						</div>
						<div class="col s12">
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    							<i class="material-icons right">send</i>
  							</button>
						</div>
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
					<h3 class="center-align heading">Registration</h3>
					<form class="col s12" action="/validate_password" method="post" role="form">
						<div class="input-field col s6">
							<label for="first_name">First Name:</label>
							<input class="validate" type="text" name="first_name" id="first_name">
						</div>
						<div class="input-field col s6">
							<label for="last_name">Last Name:</label>
							<input class="validate" type="text" name="last_name" id="last_name">
						</div>
						<div class="input-field col s12">
							<label for="email">Email:</label>
							<input class="validate" type="email" name="email" id="email">
						</div>
						<div class="input-field col s6">
							<label for="password">Password:</label>
							<input class="validate" type="password" name="password" id="password">
						</div>
						<div class="input-field col s6">
							<label for="passconf">Password Confirmation:</label>
							<input class="validate" type="password" name="confirm_pass" id="passconf">
						</div>
						<div class="col s12">
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    							<i class="material-icons right">send</i>
  							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			<a href="#modal1" class=" modal-trigger modal-close waves-effect waves-green btn-flat">Already Registered? Log In!</a>
		</div>
	</div>