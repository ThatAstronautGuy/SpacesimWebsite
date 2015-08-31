<?php
function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('./includes/header.phtml');
?>
  <body>
	<div id="contents">
		<div id="infobox">
			<div class="wrapper clearfix">
				<div class="info">
					<h1>Welcome to spacesim.</h1>
					<p>
						Spacesim is a non-profit organization that is dedicated to teaching people about space, as well as fostering a love and respect of the "final frontier." Explore our site to learn more about Spacesim, and we hope you enjoy your visit.
					</p>
				</div>
			</div>
			<div class="highlight">
				<h2>Bunch of titely words here - <i>subtitley words here.</i></h2>
			</div>
		</div>
		<div class="body clearfix">
			<p style="font-size:12px;">
				Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words here Words here words hereWords here words here Words here words here Words here words here Words here words here Words here words,
			</p>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">	
			<li>
				<img src="images/constellation_map.jpeg" alt="Img" height="204" width="220">
				<h3><a href="eeps.php">EEPs</a></h3>
				<p>
					EEPs, or external education program is where we, spacesim go out into the public and educate people about space. Whether we are doing a planetarium presentation or something else we are always happy to teach!
				</p>
			</li>
			<li>
				<img src="images/stars_blog.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Updates</a></h3>
				<p>
					Find out whats going on this week, or see any updates on upcoming activities and events.
				</p>
			</li>
			<li>
				<img src="images/stars_eeps.jpg" alt="Img" height="204" width="220">
				<h3><a href="contact.php">Contact Us</a></h3>
				<p>
					Have questions about us? Interested in planetarium presentations? Any questions about space in general? Here is where to reach us for anything you might need.
				</p>
			</li>
		</ul>
	<?php
include_once('./includes/footer.phtml');
?>
