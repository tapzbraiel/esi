<div class="row">
	<div id="generated_code_col" class="col-md-7">
		<?php
			if(isset($codes)){?>
				<table id="gen_code_table" border="0" cellpadding="4" cellspacing="0">
					<thead><tr><th width="200">#</th><th width="400">Activation Code</th></tr></thead>
					<tbody>
				<?php
				foreach ($codes as $key => $value) {
						echo '<tr>';
							echo '<td class="code_no">Activation Code'." ".$value->NO.'</td><td class="code">'.$value->CODE.'</td>';
						echo '</tr>';
				}
				?>
				</tbody>
				</table>
		<?php
			}
		?>
		<ul id="gen_code_actions">
			<li><a href="<?site_url()=?>">Reset</a></li>
			<li><a href="<?site_url()=?>">Save</a></li>
			<li><a href="<?site_url()=?>">Print</a></li>
		</ul>
	</div>
	<div class="col-md-4 col-md-offset-1">

	</div>
</div>