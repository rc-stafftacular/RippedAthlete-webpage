<?php
$color = (isset($_GET['color']))? $_GET['color'] : 'blue';
$theme = (isset($_GET['theme']))? $_GET['theme'] : 'white';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<meta name="robots" content="all">
        <meta name="description" content="Your Description">
        <meta name="viewport" content="width=device-width">
        
        <title>Statix Landing</title>
        
        <link rel="icon" type="image/png" href="img/favicon.png">
	    <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        <!-- color scheme -->
        <link rel="stylesheet" href="css/theme-<?=$color?>.css">
        
        <!-- lightbox -->
        <link rel="stylesheet" href="css/lightbox.css" />
        
		<!-- elastislide -->
		<link rel="stylesheet" href="css/elastislide.css" />
		<link rel="stylesheet" href="css/demo_sidebar.css" />
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	<div class="sidebar">
 			Colors<br/>
 			<hr/>
    		<a href="index.php?color=blue&theme=<?=$theme?>" class="circle-blue"></a><hr/>
	    	<a href="index.php?color=teal&theme=<?=$theme?>" class="circle-teal"></a><hr/>
	    	<a href="index.php?color=green&theme=<?=$theme?>" class="circle-green"></a><hr/>
	    	<a href="index.php?color=red&theme=<?=$theme?>" class="circle-red"></a><hr/>
	    	<a href="index.php?color=orange&theme=<?=$theme?>" class="circle-orange"></a>
	    	<br/>
	    	Theme<br/>
 			<hr/>
 			<a href="index.php?color=<?=$color?>&theme=white" class="circle-white"></a><hr/>
	    	<a href="index.php?color=<?=$color?>&theme=black" class="circle-black"></a><hr/>
    	</div>
        <header>
       		<div class="ribbon-top">
       			<div class="ribbon-top-m">
       			</div>
       		</div>
       		<div class="ribbon-mid">
       			<div class="ribbon-mid-m">
       				<div class="ribbon-content clearfix">
	       				<div class="logo">
							<h1><a href="javascript:void(0)">Statix<span class="white">Landing</span></a></h1>
						</div>
						<div class="header_social">
							<ul>
								<li class="ico-facebook"><a href="javascript:void(0)"></a></li>
								<li class="ico-twitter"><a href="javascript:void(0)"></a></li>
								<li class="ico-email"><a href="javascript:void(0)" class="show-popup"></a></li>
							</ul>
						<span class="hide-when-small">Call us at:</span> 1-800-123-1234
						</div>
					</div> 
       			</div>
       		</div>
       		<div class="ribbon-bottom">
       			<div class="ribbon-bottom-m">
       				<div class="left"></div>
       				<div class="right"></div>
       			</div>
       		</div>
        </header>
		<div class="jumbo">
			<!-- Flexslider -->
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="container">
							<!-- Slider Content -->
							<div class="slider-text">
								<h1>Introducing A New Responsive Multi-Purpose Landing Page</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Phasellus condimentum urna nec elit feugiat id pulvinar lectus
									interdum. Quisque in placerat sapien. Etiam velit mi, semper
									sed ultricies sit amet, vehicula et dolor.</p>
								<p>Check out some of our great features:</p>
								<ul>
									<li><i class="icon-ok icon-white"></i> Fully Responsive</li>
									<li><i class="icon-ok icon-white"></i> HTML5 plus CSS3</li>
									<li><i class="icon-ok icon-white"></i> Contact &amp; Subscribe Forms</li>

								</ul>
								<p>
									<a href="javascript:void(0)" class="btn btn-statix">Buy Now <i class="icon-shopping-cart icon-white"></i>
									</a>
									<a href="javascript:void(0)" class="btn btn-statix">Try Free</a>
								</p>
							</div>
							<div class="slider-image">
								<img src="img/mobile_tablet.png" alt="mobile and tablet">
							</div>
							<!-- /Slider Content -->
						</div>
					</li>
					<li>
						<div class="container">
							<!-- Slider Content -->
							<div class="slider-image">
								<img src="img/laptop.png" alt="laptop">
							</div>
							<div class="slider-text">
								<h1>Responsive Gallery, Lightbox, Slider</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Phasellus condimentum urna nec elit feugiat id pulvinar lectus
									interdum. Quisque in placerat sapien. Etiam velit mi, semper
									sed ultricies sit amet, vehicula et dolor.</p>
								<p>Even more features:</p>
								<ul>
									<li><i class="icon-ok icon-white"></i> Image Slider</li>
									<li><i class="icon-ok icon-white"></i> Easy to Modify (Built with Bootstrap)</li>
									<li><i class="icon-ok icon-white"></i> Simple MailChimp Integration</li>
								</ul>
								<p>
									<a href="javascript:void(0)" class="btn btn-statix">Buy Now <i class="icon-shopping-cart icon-white"></i>
									</a>
									<a href="javascript:void(0)" class="btn btn-statix">Try Free</a>
								</p>
							</div>
							<!-- /Slider Content -->
						</div>
					</li>
				</ul>
			</div>
			<!-- /Flexslider-->
		</div>
        <div class="container <?=$theme?>-bg content">
        	<!-- Blurb -->
        	<div class="ribbon aligncenter">
        		<h2>A New Challenger Appears</h2>
        		<p class="strong">Help your site attract more attention with this landing page.</p>
        	</div>
        	<!-- 3 Column Features -->
        	<div class="row-padding">
	        	<div class="row-fluid">
	        		<div class="span4">
	        			<div class="feature-box aligncenter">
	        				<div class="img-padding">
		        				<a href="img/sample1.jpg" title="Suspendisse feugiat venenatis suscipit. Maecenas scelerisque facilisis nibh pulvinar ultricies." rel="lightbox[feature]">
		        					<img src="img/sample1.jpg" class="hover" alt="sample image">
		        				</a>
	        				</div>
		        			<h2>Responsive</h2>
		        			<p class="same-demo-height">Suspendisse feugiat venenatis suscipit: Maecenas scelerisque facilisis nibh pulvinar ultricies. Quisque sagittis leo in augue tempor tincidunt.
		        			</p>
		        			<div class="round-icon lightbulb aligncenter">
				       		</div>
	        			</div>
	        		</div>	
	        		<div class="span4">
	        			<div class="feature-box aligncenter">
	        				<div class="img-padding">
		        				<a href="img/sample2.jpg" title="Morbi quis est at libero volutpat accumsan."  rel="lightbox[feature]">
		        					<img src="img/sample2.jpg" class="hover" alt="sample image">
		        				</a>
	        				</div>
		        			<h2>Ajax Forms</h2>
		        			<p class="same-demo-height">Morbi quis est at libero volutpat accumsan. Quisque sagittis leo in augue tempor tincidunt. Vivamus sit amet odio erat. Aliquam erat volutpat. 
		        			</p>
		        			<div class="round-icon checkmark aligncenter">
				       		</div>
	        			</div>
	        		</div>	
	        		<div class="span4">
	        			<div class="feature-box aligncenter">
	        				<div class="img-padding">
		        				<a href="img/sample3.jpg" title="Curabitur turpis felis, gravida ac blandit a, blandit at massa." rel="lightbox[feature]">
		        					<img src="img/sample3.jpg" class="hover" alt="sample image">
		        				</a>
	        				</div>
		        			<h2>Gallery</h2>
		        			<p class="same-demo-height">Curabitur turpis felis, gravida ac blandit a, blandit at massa. Mauris accumsan elit at justo tincidunt volutpat. Fusce vehicula leo sit amet urna euismod aliquam.
		        			</p>
		        			<div class="round-icon thumbsup aligncenter">
				       		</div>
	        			</div>
	        		</div>	
	        	</div>
        	</div>
        	<!-- /3 Column Features -->
        	<!-- Video Area -->
        	<div class="ribbon aligncenter">
       			<h2>Great Features</h2>
       			<p class="strong">Read about how awesome our product is.</p>
			</div>
			<div class="row-padding">
	       		<div class="row-fluid">
		       		<div class="span6">
		       			<div class="box">
		       				<div class="text-padding">
		        			<iframe src="http://player.vimeo.com/video/55213920" height="260"></iframe>
			        			<p class="strong"><em>Title of Video
			        			</em>
			        			</p>
			        			<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in placerat sapien.
			        			</em>
			        			</p>
		        			</div>
		        		</div>
	        		</div>
	        		<div class="span6">
	        			<div class="feature-box">
		        			<h1>Why We Are the Best</h1>
		        			<hr/>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
							<p> Phasellus condimentum urna nec elit feugiat id pulvinar lectus interdum. Quisque in placerat sapien.
							</p>
							<p>Praesent lobortis massa ut ligula mattis scelerisque. Suspendisse dapibus felis ut diam suscipit venenatis.</p>
							<p>Our Features:
							</p>
							<ul>
								<li><i class="icon-ok"></i> Fully Responsive</li>
								<li><i class="icon-ok"></i> Valid HTML5</li>
								<li><i class="icon-ok"></i> Bootstrap Compatible</li>
								<li><i class="icon-ok"></i> Responsive Gallery and Slider</li>
								<li><i class="icon-ok"></i> Working Ajax Contact Form</li>
								<li><i class="icon-ok"></i> Subscribe Form with simple MailChimp Integration</li>
							</ul>
							<div class="round-icon star aligncenter">
				       		</div>
						</div>
	        		</div>
	       		</div>
       		</div>
        	<!-- /Video Area -->
        	<!-- Gallery Area -->
      		<div class="ribbon aligncenter">
       			<h2>Our Portfolio</h2>
       			<p class="strong">Why we stand out above the competition.
			</div>
			<div class="row-padding">
				<div class="row-fluid">
					<div class="span12">
						<div class="feature-box">
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li><a href="img/sample4.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample4_sm.jpg" class="hover" alt="image01" /></a></li>
								<li><a href="img/sample5.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample5_sm.jpg" class="hover" alt="image02" /></a></li>
								<li><a href="img/sample6.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample6_sm.jpg" class="hover" alt="image03" /></a></li>
								<li><a href="img/sample7.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample7_sm.jpg" class="hover" alt="image04" /></a></li>
								<li><a href="img/sample8.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample8_sm.jpg" class="hover" alt="image05" /></a></li>
								<li><a href="img/sample9.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample9_sm.jpg" class="hover" alt="image06" /></a></li>
								<li><a href="img/sample10.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample10_sm.jpg" class="hover" alt="image07" /></a></li>
								<li><a href="img/sample11.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample11_sm.jpg" class="hover" alt="image08" /></a></li>
								<li><a href="img/sample3.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample3_sm.jpg" class="hover" alt="image09" /></a></li>
								<li><a href="img/sample2.jpg" rel="lightbox[sample]" title="sample image"><img src="img/sample2_sm.jpg" class="hover" alt="image10" /></a></li>
								<li><a href="img/sample1.jpg" rel="lightbox[sample]" ><img src="img/sample1_sm.jpg" class="hover" alt="image11 no title" /></a></li>
							</ul>
							<!-- End Elastislide Carousel -->
						</div>
					</div>
				</div>
			</div>
        	<!-- /Gallery Area -->
	        <!-- Tesimonials -->
	        <div class="ribbon aligncenter">
       		<h2>What Others Are Saying</h2>
       		<p class="strong">Responses from our satisfied customers.</p>
        	</div>
        	<div class="row-padding">
        		<div class="row-fluid">
					<div class="span8">
					    <div class="box">
				        	<div class="testimonials">
					        	<div class="flexslider">
									<ul class="slides">
										<li>
										<img src="img/customer2.jpg" alt="customer">
										  <br/>
										  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Phasellus condimentum urna nec elit.</p>
										  <small>- Mr Smith</small>
					        			</li>
					        			<li>
					        			  <img src="img/customer3.jpg" alt="customer">
					        			  <br/>
										  <p>Curabitur turpis felis, gravida ac blandit a, blandit at massa. Suspendisse dapibus felis ut diam suscipit venenatis.</p>
										  <small>- Mrs Smith</small>
					        			</li>
					        			<li>
					        			  <img src="img/customer1.jpg" alt="customer">
					        			  <br/>
										  <p>Mauris accumsan elit at justo tincidunt volutpat. Praesent lobortis massa ut ligula mattis scelerisque.</p>
										  <small>- My Neighbour</small>
					        			</li>
					        		</ul>
					        	</div>
				        	</div>
				        </div>
				    </div>
				    <div class="span4">
						<div class="feature-box">
							<h2>Top Notch Service</h2>
							<hr/>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Phasellus condimentum urna nec elit.
							</p>
							<p>Morbi quis est at libero volutpat accumsan. Quisque sagittis leo in augue tempor tincidunt.
				       		</p>
				       		<div class="round-icon smiley aligncenter">
				       		</div>
				       	</div>
					</div>
				</div>
	        </div>
			<!-- End Testimonials -->
        	<!-- Download Now -->
        	<div class="ribbon aligncenter">
        		<h2>What are you waiting for?</h2>
        		<p class="strong">Download/sign up today.</p>
        	</div>
        	<div class="row-padding">
        		<div class="row-fluid">
	        		<div class="span12">
			        	<div class="round-icon software aligncenter"></div>
			        	<br/>
			        	<div class="aligncenter">
			        		<a href="javascript:void(0)" class="btn btn-statix">Buy Now <i class="icon-shopping-cart icon-white"></i></a>
			        		<a href="javascript:void(0)" class="btn btn-statix">Try Free Trial</a>
			        		<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			        		</p>
			        	</div>
	        		</div>
	        	</div>
        	</div>
		 </div>
		<!-- footer -->
        <footer>
        	<div class="container">
				<div class="row-fluid">
					<div class="span4">
						<div class="box newsletter">
							<h3>Newsletter Subscription</h3>
							<hr/>
							<!-- Signup area, embed your MailChimp code instead if desired: -->
				       		<form id="signup">
							    <label>Subscribe to our newsletter and get our latest updates delivered to your inbox:</label>
							    <input type="text" placeholder="Email" id="user_email">
							    <input type="submit" class="btn btn-dark" id="submit_newsletter" value="Subscribe">
							    <div class="sub_msg"></div> 
							</form>
							<!-- Begin MailChimp Signup Form (example):
									<form action="http://bobbyli.us6.list-manage.com/subscribe/post?u=ab6518ff098e9d001abf501c2&amp;id=e890c491ed" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<label for="mce-EMAIL">Subscribe to our mailing list</label>
										<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
										<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn"></div>
									</form>
							End mc_embed_signup-->
							<div class="clearboth"></div>
						</div>
					</div>
					<div class="span4">
						<div class="box">
							<h3>Contact Info</h3>
							<hr/>
							123 Place Road<br>
							State/Province Area/Postal Code<br>
							1-800-123-1234<br>
							contact@mysite.com<br>
							<br/>
							<a href="javascript:void(0)" class="btn btn-statix show-popup">Email Us Now</a>
						</div>
					</div>
					<div class="span4">
						<div class="box">
							<h3>About Statix Landing</h3>
							<hr/>
							<p>Curabitur turpis felis, gravida ac blandit a, blandit at massa. Mauris accumsan elit at justo tincidunt volutpat. 
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
							</p>
						</div>
					</div>
	          	</div>
	          	<br/>
	          	<br/>
	          	<div class="footer_social">
	          		<ul>
						<li class="ico-facebook"><a href="javascript:void(0)"></a></li>
						<li class="ico-twitter"><a href="javascript:void(0)"></a></li>
						<li class="ico-email"><a href="javascript:void(0)" class="show-popup"></a></li>
					</ul>
	          	</div>
	            <p class="copy">&copy; Statix Landing 2012 | All rights reserved.</p>
              </div>
          </footer>
        <!-- Black overlay for popups -->
		<div class="overlay"></div>
		<!-- Popup contact form -->
		<div class="popup-box">
			<h2>Contact Us
        	</h2>
        	<p>
        	</p>
       		<div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, we will get back to you soon.</div>
			<div id="error" class="alert alert-error" style="display:none"></div>
			<form class="form-horizontal" id="contact_form">
			 <div class="control-group">
			    <label class="control-label" for="fname">First Name*</label>
			    <div class="controls">
			      <input type="text" id="fname" placeholder="First Name">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="lname">Last Name*</label>
			    <div class="controls">
			      <input type="text" id="lname" placeholder="Last Name">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="email">Email*</label>
			    <div class="controls">
			      <input type="text" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="phone">Phone Number</label>
			    <div class="controls">
			      <input type="text" id="phone" placeholder="Phone Number">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="address">Address</label>
			    <div class="controls">
			      <input type="text" id="address" placeholder="Address">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="message">Message*</label>
			    <div class="controls">
			      <textarea id="message" rows="5"></textarea>
			    </div>
			  </div>
			  <div class="control-group">
			  	<div class="controls">
			  		<button class="btn btn-statix close-popup">Cancel</button>
			   		<button type="submit" id="submit_contact_info" class="btn btn-statix">Send Email</button>
			 	</div>
			  </div>
			</form>
			<button class="btn btn-statix close-popup after-close">Close</button>
       	</div>
        <script src="js/vendor/jquery-1.8.3.min.js"></script>
		<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
		<!-- lightbox -->
		<script src="js/lightbox.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
		<script src="js/jquery.flexslider.js"></script>
    </body>
</html>
    	