$(document).ready(function() {
	//Set up local variables
	var collapsed = false;				//Handle collapsing menu

	//Load elements into the page. Load is async,
	//so we then attach the things being loaded as a callback
	$('#header').load('/includes/header.html', function() {
		$('#openMenu').click(function() {
	  		$('#menu').animate({
		        left: '0px'
	      	}, 400);
	      	$('body').animate({
	        	left: '300px'
	    	}, 400);
	  	});
	});
	$('#menu').load('/includes/menu.html', function() {
		$('#closeMenu').click(function() {
      		$('#menu').animate({
        		left: '-300px'
      		}, 400);
      		$('body').animate({
        		left: '0px'
      		}, 400);
  		});
	});
	$('#footer').load('/includes/footer.html');

	//Set up initial element visability states
	$('#openMenu').hide();

	$(window).scroll(function() {
		if (collapsed === false && window.pageYOffset > 40) {
			collapsed = true;
			$('#openMenu').hide().fadeIn(200);
			$('#header').animate({
				width: '8%'
			}, 500);
		}
		else if (collapsed === true && window.pageYOffset <= 40) {
			collapsed = false;
			$('#openMenu').show().fadeOut(200);
			$('#header').animate({
				width: '100%'
			}, 500)
		}
	});
});