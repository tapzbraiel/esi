<div id="login_form" class="row">
		<?php echo validation_errors();?>
	<div class="span3"></div>
	<div id="form_wrapper" class="span6">
		<form class="form-horizontal" method="post" action="?">
			<!--<div class="control-group">-->
				<label class="control-label">Username:</label>
				<div id="username_control_holder" class="controls">
					<input type="text" name="username" class="input-xlarge"/>
				</div>
			<!--</div>-->

			<!--<div class="control-group">-->
				<label for="password" class="control-label">Password:</label>
				<div id="pw_control_holder" class="controls">
					<input type="password" name="password" class="input-xlarge"/>
				</div>
			<!--</div>-->

			<!--<div class="control-group">-->
				<label for="password" class="control-label">Usertype:</label>
				<div class="controls">
					<select name="user_type" class="input-xlarge">
						<option class="input-xlarge" value=''>user-type</option>
						<option class="input-xlarge" value='admin'>admin</option>
						<option class="input-xlarge" value='member'>member</option>
					</select>
				</div>
			<!--</div>-->

			<!--<div class="control-group">-->
				<div id="btn-login-holder" class="controls">
					<input id="btn-login" type="submit" value="Login" class="btn btn-success"/>
				</div>
			<!--</div>-->
		</form>
	</div>
	<div class="span3"></div>
</div>