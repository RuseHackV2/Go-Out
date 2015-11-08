<?php

/* JS and CSS*/
function goout_script_enqueue() {
	wp_enqueue_script( 'custom-ajax-request',  get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ) );
	wp_localize_script( 'custom-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script('jquery-172', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array('jquery' ), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', array('jquery' ), '1.0.0', true);
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

}
add_action( 'wp_enqueue_scripts', 'goout_script_enqueue');

/* Menus */
function menus() {
	add_theme_support('menus');
	register_nav_menu('main-menu', 'Header Menu');
}

add_action('init', 'menus');

/*Enable Featured Image in backend */
add_theme_support( 'post-thumbnails' ); 

/* Hide admin bar in front-end for normal users */
show_admin_bar(false); 

add_action('wp_ajax_my_submit_log_action', 'my_submit_log_action');
add_action('wp_ajax_nopriv_my_submit_log_action', 'my_submit_log_action');

function my_submit_log_action(){
	parse_str($_POST['value'], $post);
    $error=true;
	echo "<script>jQuery('#MyDate').removeClass('error-border');</script>";
	
	if(empty($post['MyDate'])){
		$error=true;
		echo "<script>
			jQuery('#MyDate').addClass('error-border');
		</script>
		
		<p class='bg-danger'>Please pick up date</p>
		";
		
	}
	
	
	
	die();
}



