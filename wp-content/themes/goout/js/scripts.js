jQuery(document).ready(function($){
	
	/*$(".wrapper").css('height', $(document).height()-$("#header").height()-$("footer").height()-40);
	$( window ).resize(function() {
		$(".wrapper").css('height', $(document).height()-$("#header").height()-$("footer").height()-40);
	});*/
	

	
	$(".arrowd").click(function(){
		$('html, body').animate({scrollTop: $(".slide").offset().top},1000);
		
	});
	
		if($(window).width() < 550){
			$(".video_homepage").css('height',$(".fillWidth").height());
		}
		else{
			$(".video_homepage").css('height','initial');
			
		}
		
		
	
	if($(window).width() < 686){
			$(".video_homepage").css('height',$(".fillWidth").height()+100);
		}
	else{
		$(".video_homepage").css('height','initial');	
	}
	
	$(window).resize(function(){
		if($(window).width() < 686){
			$(".video_homepage").css('height',$(".fillWidth").height());
		}
		else{
			$(".video_homepage").css('height','initial');	
		}
	});
	
	
	/* landing  */
	$(".signup_button").click(function(){
		$(".wp-social-login-widget").fadeIn("slow");
		$(".signup_button").fadeOut("slow");
	});
	
	/* Mobile toggle */
	$("#menu").click(function(){
		$(".mobile").slideToggle("slow");
	});
	
	/* Date picker */
	$('#MyDate').datepicker({
        dateFormat : 'dd-mm-yy',
		minDate: 0 
    });
	$(".ui-helper-clearfix").hide();
	
});