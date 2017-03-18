jQuery("document").ready(function($){
	
	var nav = $('#navbar');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 163) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
	});
 
});