jQuery(document).ready(function($) {
	$( '#shareTime' ).submit( function( event ) { 
        event.preventDefault(); 
		$.post(
            MyAjax.ajaxurl,
            {
                action : 'my_submit_log_action',
                value : $('#shareTime').serialize(),
            },
                function(data) {
                    $(".result").html(data);
                }
        );
	});
});