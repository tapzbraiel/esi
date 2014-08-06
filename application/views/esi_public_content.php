<!-- row6 -->
		<div id="row6" class="row">
			<div class="col-sm-7">
				<div class="row widget widget_top_margin">Watch this video on how to earn</div>
				<div id="video_holder" class="row">
						<div class="col-lg-1 col-sm-1 col-xs-1"></div>
						<div class="col-lg-10 col-sm-10 col-xs-10"><!--<img id="video" src="<?=base_url()?>public/img/video.jpg"/>-->
							<div class="embed-responsive embed-responsive-4by3">
							     <iframe class="embed-responsive-item" src="http://www.youtube.com/v/H_Z6U-hSUhU?version=3&amp;hl=fil_PH"></iframe>
							</div>
						</div>
						<div class="col-lg-1 col-sm-1 col-xs-1"></div>
				</div>
				<div class="row widget_top_margin">
					<div id="top_earners" class="col-sm-12 col-xs-12">
						<div class="row widget widget_top_margin">TOP 10 Earners</div>
						<div id="top_earners_list" class="row widget_sidebar">
							<div class="col-sm-6 col-xs-6">
								<p>1. CATAN, RADHARANI C.</p>
								<p>2. FLORES, RODRIGO JR M.</p>
								<p>3. MERTO, HIPOLITO JR A.</p>
								<p>4. TAPDASAN, BRAILE C.</p>
								<p>5. LAGAT, ROSE S.</p>
							</div>
							<div class="col-sm-6 col-xs-6">
								<p>6. CATAN, RADHARANI C.</p>
								<p>7. FLORES, RODRIGO JR M.</p>
								<p>8. MERTO, HIPOLITO JR A.</p>
								<p>9. TAPDASAN, BRAILE C.</p>
								<p>10. LAGAT, ROSE S.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div class="row widget widget_top_margin">ANNOUNCEMENT</div>
				<div class="row widget_sidebar">
					<?php 
						if($announcement){
							foreach ($announcement as $key) {
							echo '<p class="title announcemnt_content">'.strtoupper($key->ANNOUNCEMENT_TITLE).':</p>';
							echo '<p class="announcemnt_content">';
								echo strlen($key->CONTENT) >= 150 ? 
									    substr($key->CONTENT, 0, 149) . '...<a href="#read-more">Read more >></a>':
									    $key->CONTENT.'</br>';
							echo '</p>';
							}
						}else{
							//echo '<p class="widget_title">No Announcement posted</p>';
						}
						?>
				</div>
				<div class="row widget widget_top_margin">LATEST ACTIVITY</div>
				<div class="row widget_sidebar">
					<p class="title announcemnt_content">Activity 1</p>
					<p class="announcemnt_content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<p class="title announcemnt_content">Activity 2</p>
					<p class="announcemnt_content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>