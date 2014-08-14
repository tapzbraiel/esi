<div class="row">
	<div id="generated_code_col" class="col-md-7">
		<div class="row">
			<div class="col-xs-12">
				<p class="alert alert-success">
					<?php echo $msg;?>
				</p>
			</div>
		</div>
		<?php
			if(isset($codes)){?>
				<!--<table id="gen_code_table" border="0" cellpadding="4" cellspacing="0">
					<thead><tr><th width="200">#</th><th width="200">Activation Code</th></tr></thead>
					<tbody>-->
				<div class="table-responsive">
				<table class="table">
					<thead><tr><th>#</th><th>Activation Code</th></tr></thead>
					<tbody>
				<?php
				for ($i=0; $i < count($codes)-1; $i++) { 
						echo '<tr>';
							echo '<td style="text-align:left">Activation Code'." ".($i+1).'</td><td style="text-align:left">'.$codes[$i].'</td>';
						echo '</tr>';
				}
				?>
				</tbody>
				</table>
				</div>
		<?php
			}
		?>
	</div>
	<div class="col-md-4 col-md-offset-1">

	</div>
</div>