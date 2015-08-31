$(document).ready(function() {
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
});