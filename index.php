<!-- I removed clearfix from a couple places, commented at each point. If the CSS goes to hell, check if readding clearfix solves everything -->
<!DOCTYPE html>
<html>
	<head>
		<title>OCE SpaceSim</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="description" content="OCESS is a non-profit organization dedicated to informing and involving students from across Ontario about space and science.">
		<link href="/style/bootstrap.min.css" type="text/css" rel="stylesheet"/>
		<link href="/style/stylesheet.css" type="text/css" rel="stylesheet"/>
		<script src="/js/jquery.min.js"></script>
		<script src="/js/main.js"></script>
	</head>
	<body>
		<div id="menu-container"></div>
		<header>
			<?php include '/include/header.html'; ?>
		</header>
		<div class="carousel">
			<div class="slider">
			    <div class="slide active-slide">
	            	<a href="#">
	              		<img src="/img/eso0934a.png">
	            	</a>
	            	<div id="intro" class="slide-container">
	            		<div class="col-xs-3"></div>
	            		<div class="col-xs-6">
	            			<h1>OCESS</h1>
	            			<p>Content content content content</p>
	            			<p>Even more content</p>
	            			<p>Mission mission mission mission</p>
	            		</div>
	            		<div class="col-xs-3"></div>
	            	</div>
			    </div>
			    <div class="slide-container slide">
				    <div class="row">
				        <div class="col-xs-8">
				    	    <a href="#">
				        		<img src="https://peterboroughplanetarium.files.wordpress.com/2012/09/peterborough_planetarium_portable_inflatable_meteor_shower.jpg">
				            </a>
				        </div>
				        <div class="col-xs-4">
				            <h1>Bring the Stars to your schoool</h1>
				            <p>Planetariums planetariums planetariums</p>
				            <p><a>Register a Planetarium</a></p>
				        </div>
				    </div>
				</div>
				<div class="slide">
				    <div class="row">
				        <div class="col-xs-8">
				    	    <a href="#">
				        		<img src="https://peterboroughplanetarium.files.wordpress.com/2012/09/peterborough_planetarium_portable_inflatable_meteor_shower.jpg">
				            </a>
				        </div>
				        <div class="col-xs-4">
				            <h1>Bring the Stars to your schoool</h1>
				            <p>Planetariums planetariums planetariums</p>
				            <p><a>Register a Planetarium</a></p>
				        </div>
				    </div>
				</div>
				<div class="slide">
				    <div class="row">
				        <div class="col-xs-8">
				    	    <a href="#">
				        		<img src="https://peterboroughplanetarium.files.wordpress.com/2012/09/peterborough_planetarium_portable_inflatable_meteor_shower.jpg">
				            </a>
				        </div>
				        <div class="col-xs-4">
				            <h1>Bring the Stars to your schoool</h1>
				            <p>Planetariums planetariums planetariums</p>
				            <p><a>Register a Planetarium</a></p>
				        </div>
				    </div>
				</div>
			</div>
			<div class="slider-nav">
			  	<a id="arrow-prev"><img src="/img/arrow-prev.png"></a>
			   	<ul class="slider-dots">
			        <li class="dot active-dot">&bull;</li>
				    <li class="dot">&bull;</li>
				    <li class="dot">&bull;</li>
				    <li class="dot">&bull;</li>
				</ul>
				<a id="arrow-next"><img src="/img/arrow-next.png"></a>
			</div>
		</div>

		<div class="content">
			<div class="highlight">
				<h2>Words - <i>Words</i></h2>	<!-- removed clearfix -->
			</div>
			<div class="body">
				<p>Test</p>
			</div>
		</div>
		<footer>
			<?php include '/include/footer.html'; ?>
		</footer>
	</body>
</html>
