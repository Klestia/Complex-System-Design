<div class="row">
	<div class="mainContent">
		<div class="large-12 columns">
			<h3>Edit your data</h3>
			<div class="large-12 columns">
				<?php 
					if(isset(SessionClass::$instance->flashError)){
						echo SessionClass::$instance->flashError.'<br>';
						foreach(FormValidation::validation_errors() as $value) echo $value.'<br>';
						unset(SessionClass::$instance->flashError);
					}
				?>
			</div>
		</div>
		<div class="large-12 columns">
			<form action="<?php echo BASE_URL; ?>editUser" method="post">
				<div class="large-12 columns">
					<label>Username
						<input type="text" value="<?php echo SessionClass::$instance->username; ?>" name="Username">
					</label>
				</div>
				<div class="large-12 columns">
					<label>Email
						<input type="email" value="<?php echo SessionClass::$instance->email; ?>" name="Email">
					</label>
				</div>
				<div class="large-12 columns">
					<label>Old Password
						<input type="password" value="" name="OldPassword">
					</label>
				</div>
				<div class="large-12 columns">
					<label>New Password
						<input type="password" value="" name="NewPassword">
					</label>
				</div>
				<div class="large-12 columns">
					<input type="submit" class="button loginButton" value="Edit" name="Login">
				</div>
			</form>
		</div>
	</div>
</div>