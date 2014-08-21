<div class="row esi-title">
	<div class="col-xs-12">
		<h3 class="align_left">List of Members</h3>
	</div>
</div>
  <div class="table-responsive">
    	<table class="table table-striped">
    		<thead>
				 <tr>
				 <th>Activation Code</th>
				 <th>Username</th>
				 <th>Full Name</th>
				 <th>Contact Number</th>
				 <th>Action</th>
				</tr>
			</thead>
			<?php
				if($members){
							foreach ($members as $key => $value) {?>
								<tr>
									<td class="left_only_align"><?=$value['ACTIVATION_CODE']; ?></td>
									<td class="left_only_align"><?=$value['USER_NAME']; ?></td>
									<td class="left_only_align"><?=$value['FIRST_NAME']." ". $value['LAST_NAME']; ?></td>
									<td class="left_only_align"><?=$value['CONTACT_NUMBER']; ?></td>
									<td class="left_only_align">
										<a href=""><button class="btn btn-default">View Details</button></a>
										<a href=""><button class="btn btn-success">Update</button></a>
										<a href=""><button class="btn btn-danger">Freeze</button></a>
									</td>
								</tr>
								<?php
								}
						}
			?>
		</table>
		<div class="row">
			<p><?=$pages?></p>
		</div>
  </div>