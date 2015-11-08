<?php
/*
Template Name: Homepage
*/

?>
<!doctype html>
<head>
	<meta charset="utf-8"><meta name=viewport content="width=device-width, initial-scale=1">
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/js/jquery-1.11.3.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/js/scripts.js'></script>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/css/bootstrap.min.css' type='text/css' />
	<link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/css/style.css' type='text/css' />
	<title><?php echo get_bloginfo( 'name' );?></title>
	<style type="text/css">
		html,body{
			background-color:#fff;	
		}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="homepage">
	<?php 

	/* Redirect if already loged in */
	if(is_user_logged_in()){
		echo "<script>window.location.href='/home/'</script>";
		die();
	}
	
	
	if( have_posts() ):
		the_post(); 
		the_content();
	endif;?>
<?php get_footer(); ?>