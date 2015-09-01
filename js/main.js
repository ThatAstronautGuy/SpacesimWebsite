$(document).ready(function() {
	//Set up local variables
	var collapsed = false;				//Handle collapsing menu
	var menuOpen = false;				//Trac status of menu

	//Force the page to start at top. This fixes menu problems
 	$(this).scrollTop(0);

	//Load elements into the page. Load is async,
	//so we then attach the things being loaded as a callback
	$('#header').load('/includes/header.html');
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
});