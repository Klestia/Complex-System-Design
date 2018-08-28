<div class="row">
			<div class="mainContent">
				<div class="large-12 columns" style="background-color:#c60b22;color:white; text-align: center; border-radius: 10px; margin-bottom: 20px;"><?php 
					if(isset(SessionClass::$instance->flashError)){
						echo SessionClass::$instance->flashError.'<br>';
						foreach(FormValidation::validation_errors() as $value) echo $value.'<br>';
						unset(SessionClass::$instance->flashError);
					}
				?></div>
				<div class="large-6 columns loginBox" style="border-right:2px solid #c60b22;">
					<h3 class="loginTitle">Login</h3>
					<form method="post" action="<?php echo BASE_URL.'login';?>">
						<div class="large-12 columns">
							<label>
								Username:
								<input type="text" name="Username">
							</label>
						</div>
						<div class="large-12 columns">
							<label>
								Password:
								<input type="password" name="Password">
							</label>
						</div>
						<div class="large-12 columns">
							<input type="submit" class="button loginButton" value="Login" name="Login">
						</div>
					</form>
				</div>
				<div class="large-6 columns loginBox">
					<h3 class="signUpTitle">Sign up</h3>
					<form method="post" action="<?php echo BASE_URL.'signup';?>">
						<div class="large-12 columns">
							<label>
								Username:
								<input type="text" name="Username">
							</label>
						</div>
						<div class="large-12 columns">
							<label>
								Email address:
								<input type="text" name="Email">
							</label>
						</div>
						<div class="large-12 columns">
							<label>
								Password:
								<input type="password" name="Password">
							</label>
						</div>
						<div class="large-12 columns">
							<input type="submit" class="button loginButton" value="Sign Up" name="Login">
						</div>
					</form>
				</div>
			</div>
		</div>