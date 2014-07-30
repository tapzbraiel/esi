<!--echo "<h1> User login page </h1>";-->
<?php echo validation_errors();?>
<form method="post">
	<div>
		User Login:
	</div>
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username" value=""/>
	</div>
	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" value=""/>
	</div>
	<div>
		<label for="user_type">User type:</label>
		<select name="user_type">
			<option value='null'>user-type</option>
			<option value='admin'>Admin</option>
			<option value='member'>Member</option>
		</select>
	</div>
	<div>
		<input type="submit" value="Login"/>
	</div>
</form>