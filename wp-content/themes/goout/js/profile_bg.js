jQuery(document).ready(function(){
	$(".wppb-default-username").find("label").text("Потребител*");
	$(".wppb-default-first-name").find("label").text("Име");
	$(".wppb-default-last-name").find("label").text("Фамилия");
	$(".wppb-default-nickname").find("label").text("Прякор");
	$(".wppb-default-website").find("label").text("Уеб Сайт");
	$(".wppb-default-biographical-info").find("label").text("Кратка биография");
	$(".wppb-default-password").find("label").text("Парола");
	$(".wppb-default-repeat-password").find("label").text("Повторна парола");
	$("#edit_profile").addClass("btn btn-primary");
	$("#display-name, input[type='text']").addClass("form-control");
	
});