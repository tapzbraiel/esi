<div class="row esi-title">
	<div class="col-xs-12">
		<p class="alert alert-success">
			<?php
			if(isset($username))
			echo $username." ";
			?>account successfully approved.
		</p>
		<h3 class="align_left">List of Pending</h3>
	</div>
</div>
<div class="table-responsive">
	<table class="table">
		<thead>
		<tr>
			<th>Activation Code</th>
			<th>Username</th>
			<th>Full Name</th>
			<th>Referral</th>
			<th>Action</th>
		</tr>
		</thead>							
		<tbody>
		<?php
			foreach ($pending as $key => $value) {?>
					<tr>
						<td class="left_only_align"><?= $value['ACTIVATION_CODE']; ?></td>
						<td class="left_only_align"><?= $value['USER_NAME']; ?></td>
						<td class="left_only_align"><?= $value['FIRST_NAME']." ".$value['LAST_NAME']; ?></td>
						<td class="left_only_align"><?= $value['REFERRALS_USERNAME']; ?></td>
						<td class="left_only_align">
							<a href="<?=site_url('pending/viewDetails/'.$value['IDMEMBERS'])?>"><button class="btn btn-default">View Details</button></a>
							<a href="<?=site_url('pending/approved/'.$value['IDMEMBERS'])?>"><button class="btn btn-success">Approved</button></a>
							<a href="<?=site_url('pending/discard/'.$value['IDMEMBERS'])?>"><button class="btn btn-danger">Discard</button></a>
						</td>
					</tr>
		<?php	
			}
		?>
		</tbody>
	</table>
</div>