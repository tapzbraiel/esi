<!--echo "<h1> User login page </h1>";-->
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<?php echo validation_errors();?>
		<form id="signup_form" method="post">
			<div class="form-group">
				<h3 id="signup_title" class="align_left">Create New Account</h3>
			</div>
			<div class="form-group">
				<label class="align_left" for="activation_code">Activation Code</label>
				<input class="form-control align_left" type="text" name="username" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="referral">Referral</label>
				<input class="form-control align_left" type="text" name="referral" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="fname">First Name</label>
				<input class="form-control align_left" type="text" name="fname" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="mname">Middle Name</label>
				<input class="form-control align_left" type="text" name="mname" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="lname">Last Name</label>
				<input class="form-control align_left" type="text" name="lname" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="bdate">Birth Date</label>
				<input class="form-control align_left" type="date" name="bdate" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="civil_status">Civil Status:</label>
				<select class="form-control align_left" name="civil_status">
					<option class="align_left textbox_control" value='null'>select status</option>
					<option class="align_left textbox_control" value='single'>Single</option>
					<option class="align_left textbox_control" value='married'>Married</option>
				</select>
			</div>
			<div class="form-group">
				<label class="align_left" for="gender">Gender</label>
				<div class="row">
					<div class="col-xs-12 align_left indent"><input  type="radio" value="Male" name="sex">Male</input></div>
					<div class="col-xs-12 align_left indent"><input  type="radio" value="Female" name="sex">Female</input></div>
				</div>
			</div>
			<div class="form-group">
				<label class="align_left" for="contact">Contact</label>
				<input class="form-control align_left" type="text" name="contact" value=""/>
			</div>
			<div class="form-group">
				<label class="align_left" for="tin">TIN</label>
				<input class="form-control align_left" type="text" name="tin" value=""/>
			</div>
			<div class="form-group">
				<input id="btn_signup" class="btn esi-btn" type="submit" value="Submit"/>
			</div>
		</form>
	</div>
</div>