		<!-- row2 -->
		<div id="row2" class="row">
			<?php
				if(isset($top_margin)){
					echo '<div class="null_object"></div>';
				}
			?>
			<div id="logo_tagline_holder" class="col-lg-9">
				<a href="<?=site_url()?>"><img id="logo_tagline" src="<?=base_url()?>public/img/logowithtagline.png"/></a>
			</div>
			<div id="contact_holder" class="col-lg-3">
				<ul>
					<li><img src="<?=base_url()?>public/img/call_icon.png"/></li>
					<li>CALL US NOW</li>
				</ul>
				<p id="company_contact">(+63910-9415-658)</p>
			</div>
		</div>