<<<<<<< HEAD
<div id="pending_title" class="row">
	<div class="col-xs-12">
		<h2 class="align_left">List of Pending</h2>
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
<tr>
<td class="left_only_align">YMDPMNZKU411</td>
<td class="left_only_align">Aris</td>
<td class="left_only_align">Aristarchus Aldebaran C. Catan</td>
<td class="left_only_align">Rodz</td>
<td class="left_only_align">
	<a><button class="btn btn-default">View Details</button></a>
	<a><button class="btn btn-success">Approved</button></a>
	<a><button class="btn btn-danger">Discard</button></a>
</td>
</tr>
</tbody>
</table>
=======
<div class="row esi-title">
	<div class="col-xs-12">
		<h3 class="align_left">List of Pending</h3>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-striped">
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
>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
</div>