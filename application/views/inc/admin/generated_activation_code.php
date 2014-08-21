<div class="row">
	<div id="generated_code_col" class="col-md-7">
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
				foreach ($codes as $key => $value) {
						echo '<tr>';
							echo '<td style="text-align:left">Activation Code'." ".$value->ID.'</td><td style="text-align:left">'.$value->ACTIVATION_CODE.'</td>';
						echo '</tr>';
				}
				?>
				</tbody>
				</table>
				</div>
		<?php
			}
		?>
		<!--<ul id="gen_code_actions">
			<li><a href="<?=site_url()?>">Reset</a></li>
			<li><a href="<?=site_url('activation/saveGeneratedCode')?>">Save</a></li>
			<li><a href="<?=site_url()?>">Print</a></li>
		</ul>-->
		<div class="row" id="generated_codes_action_wrapper">
			<form class="col-xs-2">
				<input class="btn btn-success fill_parent esi-btn" type="submit" value="Reset"/>
			</form>
			<form class="col-xs-2" id="frm_generated_code" method="post" action="<?=site_url('activation/saveGeneratedCode')?>">
				<?php 
					$imploded_codes='';
					foreach ($codes as $key => $value) {
						$imploded_codes.=$value->ACTIVATION_CODE.",";
					}
					echo '<input type="hidden" name="imploded_codes" value="'.$imploded_codes.'"/>';
				?>
				<input class="btn btn-success fill_parent esi-btn" type="submit" value="Save"/>
			</form>
			<form class="col-xs-2">
				<input class="btn btn-success fill_parent esi-btn" type="submit" value="Print"/>
			</form>
			<div class="col-xs-6"></div>
			</div>
	</div>
	<div class="col-md-4 col-md-offset-1">

	</div>
</div>