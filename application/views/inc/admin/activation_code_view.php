<div class="row">
	<div id="activation_code_col" class="col-md-7">
		<div id="act_code_title_track" class="row">
			<div class="col-lg-9 col-md-9"><p id="activation_code_title">GENERATE ACTIVATION CODE</p></div>
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
		<form class="form-inline" method="post" action="<?=site_url('activation/generate_code')?>">

				<label class="align_left" for="inputno_of_codes">Enter number of Activation Code to generate:</label>
				<div class="row">
					<div class="col-xs-5 align_left">
						<input type="text" class="form-control align_left" id="act_code_textfield" name="no_of_cod" placeholder="No.of Code">
						<input type="submit" class="btn btn-success esi-btn" value="Generate">
					</div>
					<div class="col-xs-7"></div>
				</div>

		</form>
	</div>
	<div class="col-md-4 col-md-offset-1">

	</div>
</div>