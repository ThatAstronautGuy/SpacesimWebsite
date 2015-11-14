$(document).ready(function() {
	//Load elements into the page. Load is async,
	//so we then attach the things being loaded as a callback
	$('.header').load('includes/header.html', function() {
		header_height = $('.header').height();
		$('#navbar a').each(function() {							
			if (active === "/" + $(this).attr('href') 
			|| (active === "/" && $(this).attr('href') === "index.html")) {
				$(this).parent().addClass('active');
				$(current_active_class).parent().removeClass('active');
				current_active_class = ("#" + active.substring(1, active.length - 5));
			}
		});
	});

	$('.footer').load('includes/footer.html', function() {
		footer_height = $('.footer').height();
		$('body').css('margin-bottom', footer_height);	
	});
});
