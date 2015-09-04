$(document).ready(function() {
	//Set up local variables
	var collapsed = false;				//Handle collapsing menu
	var menuOpen = false;				//Trac status of menu

	//Force the page to start at top. This fixes menu problems
 	$(window).scrollTop(0);

 	var active = window.location.pathname;
 	var current_active_class = '#index';

	//Load elements into the page. Load is async,
	//so we then attach the things being loaded as a callback
	$('#header').load('/includes/header.html', function() {
  		$('#navigation a').each(function() {							//This works, but I feel terrible
  			if (active === "/" + $(this).attr('href') || (active === "/" && $(this).attr('href') === "index.html")) {
					$(this).parent().addClass('active');
  				$(current_active_class).parent().removeClass('active');
  				current_active_class = ("#" + $(this).attr('href')).substring(0, ("#" + $(this).attr('href')).length - 5);
  				console.log(current_active_class);
  			}
  		});
	});
	$('#menu-container').load('/includes/menu.html', function() {
		$('#openMenu').click(function() {
			menuOpen = true;
			$('#openMenu').show().fadeOut(200);
	  		$('#menu').animate({
		        left: '0px'
	      	}, 400);
	      	$('body').animate({
	        	left: '300px'
	    	}, 400);
	  	});
		$('#closeMenu').click(function() {
			menuOpen = false;
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
      		//The animation delays here are touchy, send me a message if you think I should adjust them a bit
  		});
	});
	$('#footer').load('/includes/footer.html');

	$(window).scroll(function() {
		if (collapsed === false && window.pageYOffset > 120) {
			collapsed = true;
			$('#openMenu').animate({
				top: '0px'
			}, 200);
		}
		else if (collapsed === true && window.pageYOffset <= 120) {
			collapsed = false;
			$('#openMenu').animate({
				top: '-40px'
			}, 200);
		}
	});

	$('.active-slide').show();
	
	//Code to handle the carousel
	$('#arrow-next').click(function() {
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
	});

	$('#arrow-prev').click(function() {
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
  	});
});