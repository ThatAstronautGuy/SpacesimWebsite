<?php
function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('./includes/header.phtml');
?>
  <body>
		<div id="contents">
			<div class="wrapper clearfix">
				 <div id="sidebar">
      				<form name="contactus" method="post" action="contact_us_send.php">
      			 	<table width="450px">
      				   </tr>
      				   <tr>
      				       <td valign="top">
      					   	   <label for="first_name">First Name *</label>
      					   </td>
      					   <td valign="top">
      						   <input  type="text" name="first_name" maxlength="50" size="30">
      					   </td>
      				   </tr> 
      				   <tr>
      				   	   <td valign="top"">
      					   	   <label for="last_name">Last Name *</label>
      					   </td>
      					   <td valign="top">
      					   	   <input  type="text" name="last_name" maxlength="50" size="30">
      					   </td>
      				   </tr>
      				   <tr>
      				   	   <td valign="top">
      					   	   <label for="email">Email Address *</label>
      				   	   </td>
      				   	   <td valign="top">
      				   	   	   <input  type="text" name="email" maxlength="80" size="30">
      				   	   </td>
      				   </tr>
      				   <tr>
       				   	   <td valign="top">
      					   	   <label for="organization">Organization</label>
      					   </td>
      					   <td valign="top">
      					   	   <input type="text" name="organization" maxlength="60" size="30">
      					   </td>
      				   </tr>
      				   	   <td valign="top">
      					   	   <label for="comments">Comments *</label>
      					   </td>
      				   	   <td valign="top">
      				   	   	   <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
      				   		   </td>
      				   </tr>
      				   <tr>
      				   	   <td colspan="2" style="text-align:center">
      					   	   <input type="submit" value="Submit">
      					   </td>
      				   </tr>
      	 		</table>
      		</form>
		</div>
				 <div class="main">
    				<h1>Where We Run</h1>
    				<p align="left">The Ottawa-Carleton Educational Space Simulation is run by students from Lisgar Collegiate Institute. Please feel free to contact us at the following address:
    				<br/>Ottawa-Carleton Educational Space Simulation
                    <br/>c/o Lisgar Collegiate Institute
                    <br/>29 Lisgar Street
                    <br/>Ottawa, Ontario
                    <br/>Canada K2P 0B9
                    <br/>Telephone: (613) 239-2696
                    <br/>
                    <br/>The address where we conduct our weekly worksessions and annual mission is as follows:
                    <br/>
                    <br/>OCDSB Albert St. Administrative Centre
                    <br/>440 Albert Street
                    <br/>Room E016
                    <br/>Ottawa, Ontario
                    <br/>Canada
				</div>
			</div>		
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">	
			<li>
				<img src="images/constellation_map.jpeg" alt="Img" height="204" width="220">
				<h3><a href="eeps.html">EEPs</a></h3>
				<p>
					EEPs, or external education program is where we, spacesim go out into the public and educate people about space. Whether we are doing a planetarium presentation or something else we are always happy to teach!
				</p>
			</li>
			<li>
				<img src="images/stars_blog.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Updates</a></h3>
				<p>
					Find out whats going on this week, or see any updates on upcoming activities and events.
				</p>
			</li>
			<li>
				<img src="images/stars_eeps.jpg" alt="Img" height="204" width="220">
				<h3><a href="contact.html">Contact Us</a></h3>
				<p>
					Have questions about us? Interested in planetarium presentations? Any questions about space in general? Here is where to reach us for anything you might need.
				</p>
			</li>
		</ul>
<?php
include_once('./includes/footer.phtml');
?>
