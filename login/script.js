$(document).ready(function () {

	$(".form-contain").hover(function () {
		$(".form-contain").addClass('increase-opacity');
		$(".form-contain").removeClass('decrease-opacity');
		$(".container-image").addClass('blur');
		$(".container-image").removeClass('noblur');
	});
	
	$(".form-contain").mouseleave(function () {
		$(".form-contain").removeClass('increase-opacity');
		$(".form-contain").addClass('decrease-opacity');
		$(".container-image").removeClass('blur');
		$(".container-image").addClass('noblur');
	});
	
	 $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
});