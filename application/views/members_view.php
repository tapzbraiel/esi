
<div class="container-fluid">
<h1>MEMBERS PAGE</h1>
  <div class="row">
    	<table class="table table-responsive table-bordered">
			 <tr>
			 <td>Fullname</td>
			 <td>Username</td>
			 <td>Age</td>
			 <td  colspan="2">Action</td>
			</tr>
			<?php
				if($results){
							foreach ($results as $key) {
								?>
								
								<tr>
									<td><?php echo $key->LAST_NAME.',' .$key->FIRST_NAME; ?></td>
									<td><?php echo $key->ACTIVATION_CODE; ?></td>
									<td><?php echo $key->AGE; ?></td>
									<td><button class="btn btn-primary">Update</button></td>
									<td><button class="btn btn-danger">Delete</button></td>
								</tr>
								<?php
								
								
								}
						}
			?>
		</table>
		<div class="row">
			<p><?php echo $links; ?></p>
		</div>
  </div>
</div>