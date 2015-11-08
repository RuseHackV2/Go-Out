<?php 
get_header();
 	if( have_posts() ):
	the_post();
	Global $mltlngg_current_language; 
	if($mltlngg_current_language == "bg_BG"):
		$lang['users_online'] ="ОНЛАЙН ПОТРЕБИТЕЛИ";
		$lang['welcome'] = "Здравей";
	else:
		$lang['users_online'] ="ONLINE USERS";
		$lang['welcome'] = "Welcome";
	endif;
?>
		<div class="container-fluid wrapper">
		<div class="row">
		<?php wp_nav_menu( array('menu_class' => 'mobile', 'menu' => 'Header-Menu')); ?>
		<div class="col-md-4 col-md-offset-2 breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
			<div class="col-md-6 col-md-offset-2">
				<div class="row info_container">
					<div class="col-md-8 homepage_user">
						<div class="text-center"><h3>You have free time ?</h3></div>
							<div class="row icons">
							<div class="col-md-3">
								<div class="icon_home"></div>
								<div class="arrow"></div>You want to go out when you have free time?
							</div>
								
							<div class="col-md-3">
								<div class="icon_people"></div>
								<div class="arrow"></div>Let your friends know exactly when you have free time						
							</div>
							<div class="col-md-3">
								<div class="icon_media"></div>
								<div class="arrow"></div>Share your time on social networks								
							</div>
							<div class="col-md-3">
								<div class="icon_team"></div>
								Enjoy !						
							</div>
						</div>
					</div>
					<?php
					global $current_user;
					get_currentuserinfo();
					
					?>
					<div class="col-md-4 login_logout">
						<h3><?php echo $lang['welcome'];?>,<br><?php echo $current_user->display_name; ?></h3>	
						<form name="shareTime" id="shareTime" class="form-group"> 
						<label for="MyDate">Pick up your date</label>
						<input type="text" id="MyDate" name="MyDate" value="" placeholder="Pick a date" class="form-control" readonly/>
						<label for="hours_start">From hour</label><select name="hours_start" class="form-control" id="hours_start">
							<?php
							for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
							for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
								echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											   .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
							?>
						</select>
						<label for="hours_end">To hour :</label><select name="hours_end" class="form-control" id="hours_end">
							<?php
							for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
							for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
								echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											   .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
							?>
						</select>
						<input type="hidden" name="user_id" value="<?php echo $current_user->ID;?>">
						<br>
						<button type="submit" class="btn btn-primary share_button">Share my free time</button>
						</form>
						<div class="result"></div>
					</div>
				</div>
				
				<div class="col-md-12 no-padding">
					<div class="row">
						<div class="box">
							<div class="box_title"><?php the_title(); ?></div>
							<div class="box_body"><?php the_content(); ?></div>
						</div>
					</div>				
				</div>
			</div>
			
			<div class="col-md-2 right_boxes">
				<div class="box">
					<div class="box_title"><?php echo $lang['users_online'];?></div>
					<div class="box_body"><?php echo do_shortcode("[vstrsnln_info]");?></div>
				</div>
			</div>
			

		</div>
	</div>	
<?php 
endif;
get_footer(); 
?>
