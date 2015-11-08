 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"><meta name=viewport content="width=device-width, initial-scale=1">
<title><?php echo get_bloginfo( 'name' );?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<?php
	Global $mltlngg_current_language; 
	if($mltlngg_current_language == "bg_BG"):
		echo "<script type='text/javascript' src='http://goout.mgknet.com/wp-content/themes/goout/js/profile_bg.js'></script>";
	endif;
?>
</head>
<body>
	<div id="header" class="container-fluid">
		<div id="menu"></div>
			<div class="row col-md-8 col-md-offset-2 header_container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="col-md-3 col-sm-3 col-xs-12 logo"></div>
				
				<!--<div class="search">
					<form action="" method="">
						<input type="text" name="search" id="search" placeholder="Search">
						<input type="submit" name="submit" class="search_button" value="Search">
					</form>
				<div class="clear"></div>
				</div>
				-->
			</div></a>

		<div class="navigation">
		
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-9 menu">
					<?php wp_nav_menu( 'menu' ,'Header-Menu' ); ?>
					</div>
					<div class="col-md-3"><?php if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?></div>
				</div>
			</div>
		</div>
	</div>
	

