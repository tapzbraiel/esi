<<<<<<< HEAD
<div class="row">
	
<div id="login_form" class="row" >
		<?php echo validation_errors();?>
	<div class="span3"></div>
	<div class="span6">    
      <form class="form-horizontal" method="post" action="?">
		<div class="control-group">
	        <label class="control-label">Activation Code</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-xlarge" id="fname" name="fname" placeholder="First Name">
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">First Name</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="input-xlarge" id="lname" name="fname" placeholder="First Name">
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">Middle Name</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-xlarge" id="lname" name="mname" placeholder="Middle Name">
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">Last Name</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-xlarge" id="lname" name="lname" placeholder="Last Name">
				</div>
			</div>
		</div>
		<div class="control-group ">
	        <label class="control-label">Birthdate</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
					<input type="date" class="input-xlarge" id="lname" name="b-date">
				</div>
			</div>
		</div>
		<div class="control-group">
	        <label class="control-label">Civil Status</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
					<select class="input-xlarge" id="email" name="sex">
						<option class="form-control" value="Single">Single</option>
						<option class="form-control" value="In a relationship">In a relationship</option>
						<option class="form-control" value="Married">Married</option>
						<option class="form-control" value="Divorced">Divorced</option>
						<option class="form-control" value="Widow">Widow</option>
					</select>
				</div>
			</div>	
		</div>
		<div class="control-group">
	        <label class="control-label">Gender</label>
			<div class="controls">
                    <label class="label-gender"><input type="radio" class="btn btn-info" value="Male" name="sex"> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="btn btn-info" value="Female" name="sex"> Female</label>
                    
                  </div></p>
				
		</div>
		<div class="control-group">
	        <label class="control-label">Contact</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-lock"></i></span>
					<input type="text" id="contact" class="input-xlarge" name="contact" placeholder="Contact">
				</div>
			</div>
		</div>
		<div class="control-group">
	        <label class="control-label">TIN</label>
			<div class="controls">
			    <div class="input-prepend">
				<span class="add-on"><i class="icon-lock"></i></span>
					<input type="text" id="TIN" class="input-xlarge" name="tin" placeholder="ex :2222-3330-33">
				</div>
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
	       <button type="submit" class="btn btn-success" title="Create My Account">Create My Account</button>
	       
	      </div>
	
	</div>
	
	  </form>

   </div>
</div>
	<div class="span3"></div>
=======
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
>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
</div>