<div class="row">
	<div class="col-lg-4"></div>
	<form id="login_form" class="col-lg-4" method="post">
		<div class="form-group">
			<?php 
			if(isset($invalid)){
				echo $invalid;
			}
			echo validation_errors();
			?>
		</div>
		<div class="form-group">
			<h3 id="login_title" class="align_left">Log in</h3>
		</div>
		<div class="form-group">
			<label class="align_left" for="inputUsername">Username</label>
			<input type="text" class="form-control align_left" id="username" name="username" placeholder="Username">
		</div>

		<div class="form-group">
			<label class="align_left" for="inputPassword">Password</label>
			<input type="password" class="form-control align_left" id="password" name="password" placeholder="Password">
		</div>

		<div class="form-group">
			<label class="align_left" for="inputUsertype">User type</label>
			<select name="user_type" class="form-control align_left">
				<option class="align_left" value=''>User-type</option>
				<option class="align_left" value='admin'>Admin</option>
				<option class="align_left" value='member'>Member</option>
			</select>
		</div>

		<div class="form-group align_left">
			<input type="submit" id="btn_login" class="btn btn-success esi-btn" value="Login">
			<a href="#">Forgot your password?</a>
		</div>
		<div class="row">
			<div class="col-xs-12 align_left"><a href="<?=site_url('sign_up')?>">Need an account? Sign up now.</a></div>
		</div>
	</form>
	<div class="col-lg-4"></div>
</div>