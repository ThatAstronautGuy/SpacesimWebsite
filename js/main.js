function nextSlide() {
	var currentSlide = $('.active-slide');
	var nextSlide = currentSlide.next();

	var currentDot = $('.active-dot');
	var nextDot = currentDot.next();

	if(nextSlide.length === 0) {
		nextSlide = $('.slide').first();
		nextDot = $('.dot').first();
	}

	currentSlide.fadeOut(600).removeClass('active-slide');
	nextSlide.fadeIn(600).addClass('active-slide');

	currentDot.removeClass('active-dot');
	nextDot.addClass('active-dot');
}

function prevSlide() {
	var currentSlide = $('.active-slide');
	var prevSlide = currentSlide.prev();

	var currentDot = $('.active-dot');
	var prevDot = currentDot.prev();

	if(prevSlide.length === 0) {
		prevSlide = $('.slide').last();
		prevDot = $('.dot').last();
	}

	currentSlide.fadeOut(600).removeClass('active-slide');
	prevSlide.fadeIn(600).addClass('active-slide');

	currentDot.removeClass('active-dot');
	prevDot.addClass('active-dot');
}

function openMenu() {
	$('#openMenu').show().fadeOut(200);
	$('#menu').animate({
		left: '0px'
	}, 400);
	$('body').animate({
		left: '300px'
	}, 400);
}

function closeMenu() {
	$('#menu').animate({
		left: '-300px'
	}, 400);
	$('body').animate({
		left: '0px'
	}, 400);
	$('#openMenu').animate({
		left: '0px'
	}, 100);
	$('#openMenu').hide().fadeIn(300);
}

$(document).ready(function() {
	//Set up local variables
	var collapsed = false;				//Handle collapsing menu

	//Force the page to start at top. This fixes menu problems
	$(window).scrollTop(0);

	var active = window.location.pathname;
	var current_active_class = '#index';

	var header_height;

	var interval = setInterval(nextSlide, 4000);

	//Load elements into the page. Load is async,
	//so we then attach the things being loaded as a callback

	header_height = $('#header').height();
	$('#navigation a').each(function() {							//This works, but I feel terrible
		if (active === "/" + $(this).attr('href') || (active === "/" && $(this).attr('href') === "index.html")) {
				$(this).parent().addClass('active');
			$(current_active_class).parent().removeClass('active');
			current_active_class = ("#" + $(this).attr('href')).substring(0, ("#" + $(this).attr('href')).length - 5);
			console.log(current_active_class);
			}
	});

	$('#menu-container').load('/includes/menu.html', function() {
		$('#openMenu').click(openMenu);
		$('#closeMenu').click(closeMenu);
	});

	$(window).scroll(function() {
		if (collapsed === false && window.pageYOffset > header_height) {
			collapsed = true;
			$('#openMenu').animate({
				top: '0px'
			}, 200);
		}
		else if (collapsed === true && window.pageYOffset <= header_height) {
			collapsed = false;
			$('#openMenu').animate({
				top: '-40px'
			}, 200);
		}
	});

	$('.active-slide').show();

	//Code to handle the carousel
	$('#arrow-next').click(function() {
		nextSlide();
		clearInterval(interval);
		interval = setInterval(nextSlide, 4000);
	});

	$('#arrow-prev').click(function() {
		prevSlide();
		clearInterval(interval);
		interval = setInterval(nextSlide, 4000);
	});
});
