jQuery(document).ready(function () {
	jQuery(".register-form").hide();
	jQuery(".hide-login").click(function(){
	    jQuery(".login-form").hide();
	    jQuery(".register-form").fadeIn(1000);
	});
	jQuery(".hide-register").click(function(){
	    jQuery(".register-form").hide();
	    jQuery(".login-form").fadeIn(1000);
	});

});