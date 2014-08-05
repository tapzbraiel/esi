<div class="row">
	<div id="activation_code_col" class="col-md-7">
	
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
				<span class="add-on"><i class="user"></i></span>
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
</div>