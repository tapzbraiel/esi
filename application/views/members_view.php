
<div class="container-fluid">
<h1>MEMBERS PAGE</h1>
  <div class="table-responsive">
    	<table class="table">
			 <tr>
			 <td class="left_only_align">Fullname</td>
			 <td class="left_only_align">Username</td>
			 <td class="left_only_align">Age</td>
			 <td  class="left_only_align">Action</td>
			</tr>
			<?php
				if($results){
							foreach ($results as $key) {
								?>
								
								<tr>
									<td class="left_only_align"><?php echo $key->LAST_NAME.',' .$key->FIRST_NAME; ?></td>
									<td class="left_only_align"><?php echo $key->ACTIVATION_CODE; ?></td>
									<td class="left_only_align"><?php echo $key->AGE; ?></td>
									<td class="left_only_align"><button class="btn btn-primary">Update</button><button class="btn btn-danger">Delete</button></td>
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