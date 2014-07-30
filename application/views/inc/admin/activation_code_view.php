<div class="row">
	<div id="activation_code_col" class="col-md-7">
		<div id="act_code_title_track" class="row">
			<div class="col-lg-1 col-md-1"></div>
			<p class="col-lg-8 col-md-8" id="activation_code_title">GENERATE ACTIVATION CODE</p>
			<p class="col-lg-3 col-md-3 gen_code_amount">
				<?php
					if(isset($amount)){
						echo "PHP ".number_format($amount,2);
					}
					else{
						echo "PHP ".number_format(0,2);
					}
				?>
			</p>
		</div>
		<form class="row" method="post" action="">
			<div class="row">
				<div class="col-lg-1 col-md-1"></div>
				<label id="no_of_act_code_label" class="col-lg-6 col-md-6 act_code_controls" for="no_of_code">Enter number of Activation Code to generate:</label>
				<div class="col-lg-5 col-md-5"></div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1"></div>
				<input id="act_code_textfield" class="col-lg-4 col-md-4 act_code_controls" type="text" name="no_of_cod" value=""/>
				<div class="col-lg-7 col-md-7"></div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1"></div>
				<div id="generate" class="col-lg-4 col-md-4 act_code_controls">
					<a href="<?=site_url('activation/generate_code')?>">Generate</a>
				</div>
				<div class="col-lg-7 col-md-7"></div>
			</div>
		</form>
	</div>
	<div class="col-md-4 col-md-offset-1">

	</div>
</div>