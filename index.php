<?php
	//Tell php where to load all the functions from
	include_once("./backend/linkage.php");
	
	//Include the "header" part of the page"
	bdk_header_include();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Bitcoin Development Kit by Shane B. &amp; Contributors</title>
	<meta name="description" content="">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="Mon, 22 Jul 2002 11:12:01 GMT">
	<meta name="viewport" content="width=device-width">
	<link href="assets/css/theme_venera_blue.css" media="all" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Abel:400|Oswald:300,400,700" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	<header id='header'>
		<div class='navbar navbar-fixed-top navbar-inverse'>
			<div class='navbar-inner'>
				<div class='container'>
					<a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</a>
					
					<a href="index.html" class="brand">Bitcoin Development Kit</a>
					<div class='nav-collapse subnav-collapse collapse pull-right' id='top-navigation'>
						<ul class='nav'>
						
							<li class='active'>
								<a href="index.html">Home<i class="icon-home"></i></a>
							</li>
							
							<li class='dropdown'>
								<a href="pricing.html">Features &amp; Pricing<i class="icon-money"></i></a>
							</li>
							
							
							<li class='dropdown'>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation<i class="icon-print"></i></a>
								<ul class='dropdown-menu'>
									<li>
										<a href="documentation/get_started.html"><i class="icon-book"></i>Get Started</a>
									</li>
									<li>
										<a href="documentation/tutorials.html"><i class="icon-film"></i>Text &amp; Video Tutorials</a>
									</li>
									<li>
										<a href="documentation/api.html"><i class="icon-folder-close"></i>API Reference List</a>
									</li>
									<li>
										<a href="documentation/faq.html"><i class="icon-question-sign"></i>FAQ</a>
									</li>
									
								</ul>
							</li>
							
							
							<li class='dropdown'>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<i class="icon-info-sign"></i></a>
								<ul class='dropdown-menu'>
									<li>
										<a href="aboutus/goals.html"><i class="icon-bar-chart"></i>Goals &amp; Road map</a>
									</li>
									<li>
										<a href="aboutus/blog.html"><i class="icon-bullhorn"></i>Blog</a>
									</li>
									<li>
										<a href="aboutus/contact.html"><i class="icon-pencil"></i>Contact Us</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="https://github.com/Xenland/Bitcoin-Development-Kit">Fork Us<i class="icon-github"></i></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class='carousel slide over-something' id='homepage-carousel'>
		<div class='carousel-inner slider-w'>
			<div class='active item'>
				<div class='container'>
					<h1 class='slider-header'>Bitcoin Development Kit With Great Documentation.</h1>
					
					<h2 class='slider-sub-header'>Intuitive integration to Bitcoin web devleopment</h2>
					
					<div class='cta'>
						<a href="pricing.html"  class="btn btn-cta">View Pricing &amp; Licensing</a>
					</div>
					
					<div class='slider-browsers-w clearfix'>
						<div class='slider-browser slider-browser-left hidden-phone' data-position-bottom='-8%'>
							<img alt="Browser-window-1" src="./assets/images/browser-window.png" />
						</div>
						
						<div class='slider-browser slider-browser-center' data-position-bottom='-9%'>
							<img alt="Browser-window-2" src="./assets/images/browser-window.png" />
						</div>
						
						<div class='slider-browser slider-browser-right hidden-phone' data-position-bottom='-8%'>
							<img alt="Browser-window-3" src="./assets/images/browser-window.png" />
						</div>
					</div>
				</div>
			</div>
			
			<div class='item'>
				<div class='container'>
					<h1 class='slider-header'>Development demonstration videos and example scripts? Oh my!</h1>
					
					<h2 class='slider-sub-header'>Offline searchable API, Wiki &amp; Documentation pages</h2>
					
					<div class='cta'>
						<a href="pricing.html" class="btn btn-cta btn-warning">View Pricing &amp; Licensing</a>
					</div>
					
					<div class='row zoomed-browsers-w'>
						<div class='span4'>
							<div class='zoomed-browser'>
								<img alt="Browser-window-1" src="assets/images/browser-window.png" />
							</div>
						</div>
						
						<div class='span4'>
							<div class='zoomed-browser hidden-phone'>
								<img alt="Browser-window-2" src="assets/images/browser-window.png" />
							</div>
						</div>
						
						<div class='span4'>
							<div class='zoomed-browser hidden-phone'>
								<img alt="Browser-window-3" src="assets/images/browser-window.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<a class='carousel-control left' data-slide='prev' href='#homepage-carousel'>
			<i class='icon-chevron-left'></i>
		</a>
		
		<a class='carousel-control right' data-slide='next' href='#homepage-carousel'>
			<i class='icon-chevron-right'></i>
		</a>
	</div>
	
	<div class='sub-slider-features'>
		<div class='container'>
			<div class='row'>
				<div class='span4'>
					<div class='info-bullet'>
						<i class='icon-thumbs-up'></i>
						<h5>Development Demonstration Videos</h5>
						<p>We know the anxieties of learning a new library, so we created easy to use demonstration videos that help you with integration.</p>
					</div>
				</div>
				<div class='span4'>
					<div class='info-bullet'>
						<i class='icon-tags'></i>
						<h5>Intrinsically Secure</h5>
						<p>All math is done (and required) in integers instead of decimals or floating points to prevent precision rounding errors of any kind.</p>
					</div>
				</div>
				<div class='span4'>
					<div class='info-bullet'>
						<i class='icon-cogs'></i>
						<h5>Soft Errors, No Haulting code</h5>
						<p>Development with Bitcoin directly can result in Bitcoin return errors, Bitcoin errors can lock up websites rendering them completly white or blank; The BDK library converts Bitcoin hard-errors into software errors; No more blank or broken pages!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--
	<section class='section-wrapper under-slider'>
		<div class='container'>
			<div class='row'>
				<div class='span12'>
					<h3 class='section-header'>Recent Work</h3>
				</div>
				<div class='span3'>
					<div class='white-card'>
						<div class="img-w hover-fader">
							<a href="assets/images/test-square.png" data-rel="lightbox[gallery]"><img alt="Photo-card" src="assets/images/test-square.png">
								<span class="hover-fade">
									<i class="icon-zoom-in"></i>
								</span>
							</a>
						</div>
						
						<h5>Donec et egestas elit.</h5>
						<p>Cras metus elit, consectetur sed congue vel, sollicitudin eget odio. Cras lacinia laoreet libero et mattis.</p>
					</div>
				</div>
				
				<div class='span3'>
					<div class='white-card'>
					<div class="img-w hover-fader">
					<a href="assets/images/test-square.png" data-rel="lightbox[gallery]"><img alt="Photo-card" src="assets/images/test-square.png">
					<span class="hover-fade">
					<i class="icon-zoom-in"></i>
					</span>
					</a>
					</div>
					<h5>Donec et egestas elit.</h5>
					<p>Cras metus elit, consectetur sed congue vel, sollicitudin eget odio. Cras lacinia laoreet libero et mattis.</p>
					</div>
				</div>
				<div class='span3'>
					<div class='white-card'>
						<div class="img-w hover-fader">
							<a href="assets/images/test-square.png" data-rel="lightbox[gallery]"><img alt="Photo-card" src="assets/images/test-square.png">
								<span class="hover-fade">
									<i class="icon-zoom-in"></i>
								</span>
							</a>
						</div>
						
						<h5>Donec et egestas elit.</h5>
						<p>Cras metus elit, consectetur sed congue vel, sollicitudin eget odio. Cras lacinia laoreet libero et mattis.</p>
					</div>
				</div>
				
				<div class='span3'>
					<div class='white-card'>
						<div class="img-w hover-fader">
							<a href="assets/images/test-square.png" data-rel="lightbox[gallery]"><img alt="Photo-card" src="assets/images/test-square.png">
								<span class="hover-fade">
									<i class="icon-zoom-in"></i>
								</span>
							</a>
						</div>
						
						<h5>Donec et egestas elit.</h5>
						<p>Cras metus elit, consectetur sed congue vel, sollicitudin eget odio. Cras lacinia laoreet libero et mattis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	
	
	<section class='section-wrapper'>
		<div class='container'>
			<div class='row'>
				<div class='span6'>
					<h3 class='section-header'>Client Testimonials</h3>
					<div class='testimonials'>
						<div class='testimonials-users row hidden-phone'>
							<div class='span1'>
								<a class='testimonials-user-w active' data-toggle='testimonial' href='#testimonial1'>
									<span class='testimonials-user'><img alt="Avatar-1" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
							
							<div class='span1'>
								<a class='testimonials-user-w' data-toggle='testimonial' href='#testimonial2'>
									<span class='testimonials-user'><img alt="Avatar-2" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
							
							<div class='span1'>
								<a class='testimonials-user-w' data-toggle='testimonial' href='#testimonial3'>
									<span class='testimonials-user'><img alt="Avatar-4" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
							
							<div class='span1'>
								<a class='testimonials-user-w' data-toggle='testimonial' href='#testimonial4'>
									<span class='testimonials-user'><img alt="Avatar-1" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
							
							<div class='span1'>
								<a class='testimonials-user-w' data-toggle='testimonial' href='#testimonial5'>
									<span class='testimonials-user'><img alt="Avatar-2" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
							
							<div class='span1'>
								<a class='testimonials-user-w' data-toggle='testimonial' href='#testimonial6'>
									<span class='testimonials-user'><img alt="Avatar-4" src="./assets/images/test-user.png" /></span>
								</a>
							</div>
						</div>
						
						<div class='testimonials-speeches'>
							<div class="testimonials-speech active" id="testimonial1">
								<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
							
							<div class='testimonials-speech' id='testimonial2'>
									<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
							
							<div class='testimonials-speech' id='testimonial3'>
									<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
							
							<div class='testimonials-speech' id='testimonial4'>
								<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
							
							<div class='testimonials-speech' id='testimonial5'>
									<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
							
							<div class='testimonials-speech' id='testimonial6'>
								<p>
									<strong>No testimonials yet.</strong>
									You could be the first!
								</p>
								<div class="speech-by">
									BDK Team
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="span6">
					<h3 class="section-header">Services We Offer</h3>
					<div class="accordion" id="accordion">
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">
									Bitcoin Financial Web Development Kit
								</a>
							</div>
							
							<div class="accordion-body collapse in" id="collapseOne">
								<div class="accordion-inner">
									With a good long standing history of web software devleopment we have provided for the general <i>Bitcoin Community</i> in the past(Referring to <a href="https://github.com/Xenland/MiningFarm" target="_BLANK">Mining Farm</a>), we have taken it upon our selves to do immense amount of research into what we call the <em>Bitcoin development and Integration experience</em> which is the art of providing a smooth solution to Bitcoin integration and devleopment.. easy as pie!
									<br/><br/>
									We are confident enough to provide you with an intutive library that will help you integrate bitcoin automation in to your website within minutes. The library handles all possible errors that the Bitcoin client will spit out at you and return those errors in the form of <i>return status</i> codes which are essentailly just numbers that are attached to a specific error meaning which you can then choose to esclate the issues through out your own software or choose to ignore the issues; <em>Its basically transparent!</em>
								</div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">
									Paid Support Services
								</a>
							</div>
							<div class="accordion-body collapse" id="collapseTwo">
								<div class="accordion-inner">
									We understand that not everyone can afford one-on-one phone support to fix a problem and in most cases it isn't nessecary; For a small fee we can help you work through your issues with integrating our library with your software over email or skype. Head on over to our <a href="contact.html">Contact</a> section and provide us with as much details as you can, the message should provide us answers to questions like "What did you expect it to do?", "What did(or didn't) it do instead of what you thought?", "What have you tried?", "What do you think the partial soution to the problem is?".
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--
	<section class='section-wrapper stripped'>
		<div class='container'>
			<div class='row clients-w'>
				<div class='span12'>
					<h3 class='section-header'>Our Clients</h3>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-1" src="assets/images/test-square.png" />
					</div>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-2" src="assets/images/test-square.png" />
					</div>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-3" src="assets/images/test-square.png" />
					</div>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-4" src="assets/images/test-square.png" />
					</div>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-5" src="assets/images/test-square.png" />
					</div>
				</div>
				<div class='span2'>
					<div class='white-card'>
						<img alt="Client-6" src="assets/images/test-square.png" />
					</div>
				</div>
			</div>
		</div>
	</section>-->
	
	<!--
	<section class='section-wrapper stripped'>
		<div class='container'>
		<div class='row'>
		<div class='span12'>
		<h3 class='section-header'>From the Blog</h3>
		</div>
		<div class='span4'>
		<div class='white-card recent-post clearfix'>
		<h5 class='recent-post-header'>
		<a href="blog/single_post.html">Nullam velit diam, rhoncus sed</a>
		</h5>
		<div class='post-info clearfix'>
		<div class='pull-left'>
		<span class='post-date'>January 15, 2011</span>
		<a href="blog/single_post.html" class="post-comments">14 Comments</a>
		</div>
		<div class='pull-right'>
		<a href="#" class="post-like"><i class='icon-heart'></i>
		250
		</a>
		</div>
		</div>
		<img alt="Photo-card-big-1" class="post-image" src="assets/images/test-square.png" />
		<p class='post-content separated'>Donec vel turpis non erat luctus ultrices vel sed massa. Quisque commodo venenatis arcu, non volutpat arcu lobortis at. Donec imperdiet nibh id metus adipiscing semper.</p>
		<a href="blog/single_post.html" class="btn btn-primary btn-extra pull-right">Read More &gt;</a>
		</div>
		</div>
		<div class='span4'>
		<div class='white-card recent-post clearfix'>
		<h5 class='recent-post-header'>
		<a href="blog/single_post.html">Nullam velit diam, rhoncus sed</a>
		</h5>
		<div class='post-info clearfix'>
		<div class='pull-left'>
		<span class='post-date'>January 15, 2011</span>
		<a href="blog/single_post.html" class="post-comments">14 Comments</a>
		</div>
		<div class='pull-right'>
		<a href="#" class="post-like"><i class='icon-heart'></i>
		250
		</a>
		</div>
		</div>
		<img alt="Photo-card-big-2" class="post-image" src="assets/images/test-square.png" />
		<p class='post-content separated'>Donec vel turpis non erat luctus ultrices vel sed massa. Quisque commodo venenatis arcu, non volutpat arcu lobortis at. Donec imperdiet nibh id metus adipiscing semper.</p>
		<a href="blog/single_post.html" class="btn btn-primary btn-extra pull-right">Read More &gt;</a>
		</div>
		</div>
		<div class='span4'>
		<div class='white-card recent-post clearfix'>
		<h5 class='recent-post-header'>
		<a href="blog/single_post.html">Nullam velit diam, rhoncus sed</a>
		</h5>
		<div class='post-info clearfix'>
		<div class='pull-left'>
		<span class='post-date'>January 15, 2011</span>
		<a href="blog/single_post.html" class="post-comments">14 Comments</a>
		</div>
		<div class='pull-right'>
		<a href="#" class="post-like"><i class='icon-heart'></i>
		250
		</a>
		</div>
		</div>
		<img alt="Photo-card-big-6" class="post-image" src="assets/images/test-square.png" />
		<p class='post-content separated'>Donec vel turpis non erat luctus ultrices vel sed massa. Quisque commodo venenatis arcu, non volutpat arcu lobortis at. Donec imperdiet nibh id metus adipiscing semper.</p>
		<a href="blog/single_post.html" class="btn btn-primary btn-extra pull-right post-btn">Read More &gt;</a>
		</div>
		</div>
		</div>
		</div>
	</section>-->
	
	<section class='section-wrapper stripped'>
		<div class='container'>
			<div class='row'>
				<div class='span12'>
					<h3 class='section-header'>Pricing Option Information</h3>
					<div class='white-card no-padding'>
						<div class='pricing-table'>
							<div class='row'>
								<div class='span3'>
									<div class='pricing-plan-w first-plan'>
										<div class='plan-name'>
											Free
										</div>
										
										<div class='plan-price-w'>
											<div class='plan-price-desc'>One time fee of</div>
											<div class='plan-price'>
												<span class='price-self'>0</span>
												<span class='price-currency'>&#579;</span>
												<span class='price-period'>/life</span>
											</div>
										</div>
										<div class='plan-desc'>
											<ul>
												<li>
													<strong>Affero Gnu Public License</strong>
													  3.0
												</li>
												<li>
													<strong>Updates</strong>
													For life
												</li>
												<li>
													<strong>Paid support </strong> by Email or Skype
												</li>
											</ul>
											<a href="pricing_option_free.html" class="btn btn-primary btn-large">Select This Plan</a>
										</div>
									</div>
								</div>
								
								<div class='span3'>
									<div class='pricing-plan-w'>
										<div class='plan-name'>
											Donor
										</div>
										<div class='plan-price-w'>
											<div class='plan-price-desc'>One time fee of</div>
											<div class='plan-price'>
												<span class='price-self' style="text-decoration:line-through;">2</span>
												<span class='price-currency' style="text-decoration:line-through;">&#579;</span>
												<span class='price-period' style="text-decoration:line-through;">/life</span>
											</div>
										</div>
										<div class='plan-price-w'>
											<div class='plan-price-desc'>Preorder for only</div>
											<div class='plan-price'>
												<span class='price-self' >0.5</span>
												<span class='price-currency' >&#579;</span>
												<span class='price-period'>/life</span>
											</div>
										</div>
										<div class='plan-desc'>
											<ul>
												<li>
													<strong>Affero Gnu Public License</strong>
													  3.0
												</li>
												<li>
													<strong>Updates</strong>
													For life
												</li>
												<li>
													<strong>Simple Example</strong> scripts
												</li>
												<li>
													<strong>Paid support </strong> by Email or Skype
												</li>
											</ul>
											<a href="pricing_option_donor.html" class="btn btn-primary btn-large">Select This Plan</a><br/><br/>
										</div>
									</div>
								</div>
								
								<div class='span3'>
									<div class='pricing-plan-w'>
										<div class='plan-name'>
											Enterprise
										</div>
										
										<div class='plan-price-w'>
											<div class='plan-price-desc'>One time fee of</div>
											<div class='plan-price'>
												<span class='price-self' style="text-decoration:line-through;">7</span>
												<span class='price-currency' style="text-decoration:line-through;">&#579;</span>
												<span class='price-period' style="text-decoration:line-through;">/life</span>
											</div>
										</div>
										
										<div class='plan-price-w'>
											<div class='plan-price-desc'>Preorder for only</div>
											<div class='plan-price'>
												<span class='price-self' >4</span>
												<span class='price-currency' >&#579;</span>
												<span class='price-period'>/life</span>
											</div>
										</div>
										
										<div class='plan-desc'>
											<ul>
												<li>
													<strong>Affero Gnu Public License</strong>
													  3.0
												</li>
												<li>
													<strong>Updates</strong>
													For life
												</li>
												<li>
													<strong>Simple &amp; Advanced</strong> Example Scripts
												</li>
												<li>
													<strong>Presentation Videos</strong><br/>To get you developing quickly!
												</li>
												<li>
													<strong>Offline:</strong> Documentation, Wiki, API
												</li>
												<li>
													<strong>Paid support </strong> by Email or Skype
												</li>
											</ul>
											
											<a href="pricing_option_enterprise.html" class="btn btn-primary btn-large">Select This Plan</a>
										</div>
									</div>
								</div>
								
								<div class='span3'>
									<div class='pricing-plan-w last-plan'>
										<div class='plan-name'>
											Proprietary
										</div>
										<div class='plan-price-w'>
											<div class='plan-price-desc'>One time fee of</div>
											<div class='plan-price'>
												<span class='price-self'>150</span>
												<span class='price-currency'>&#579;</span>
												<span class='price-period'>/organization</span>
											</div>
										</div>
										<div class='plan-desc'>
											<ul>
												<li style="text-decoration:line-through;">
													<strong>Affero Gnu Public License  3.0</strong>
												</li>
												<li>
													<strong>Updates</strong>
													For entity life
												</li>
												<li>
													<strong>Simple &amp; Advanced</strong> Example Scripts
												</li>
												<li>
													<strong>Presentation Videos</strong><br/>To get you developing quickly!
												</li>
												<li>
													<strong>Offline:</strong> Documentation, Wiki, API
												</li>
												<li>
													<strong>One year free support </strong> by Email, Phone or Skype
												</li>
											</ul>
											<p>This plan is not available for purchase yet we are evaluating our commerical licensing options, please <a href="contact.html">Contact Us</a> if you wish to inquiry about updates.</p>
											<!--<a href="register.html" class="btn btn-primary btn-large">Select This Plan</a><br/><br/>-->
											<!--<p>This plan is best suited for entities that wish to alter/use the library with out obligation to releasing source-code.</p>-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class='pre-footer'>
			<div class='container'>
				<div class='row'>
					<div class='span4'>
						<div class='footer-logo'>
							<a>Bitcoin <strong> Development Kit</strong></a>
						</div>
						<ul class='footer-address'>
							<li>
								<strong>Robust, Flexable &amp; Smooth Development</strong>
								<br/>
								Use the functions you need, to the extent that you need it.
								<br/><br/>
								
								<strong>Intutive Error Automation</strong>
								<br/>
								Bitcoin errors return into soft errors that are helpful to you as a developer during run-time!<br/>
								
								<br/><br/>
								Your financial security, is our business!
								
							</li>
						</ul>
					</div>
					
					<div class='span4'>
						<!-- BEGIN: Powered by Supercounters.com -->
						<center><script type="text/javascript" src="http://widget.supercounters.com/flag.js"></script><script type="text/javascript">sc_flag(380160 /*417419*/,"008c9e","ffffff","008c9e",4,24,0,0)</script><br><noscript><a href="http://www.supercounters.com/">Flag Counter</a></noscript>
						</center>
						<!-- END: Powered by Supercounters.com -->
					</div>
					
					<!--
					<div class='span4'>
						<h5 class='footer-header'>Recent Posts</h5>
						<ul class='footer-list'>
							<li>
								<a>Vestibulum auctor dapibus</a>
							</li>
							<li>
								<a>Aliquam tincidunt mauris</a>
							</li>
							<li>
								<a>Lorem ipsum dolor sit</a>
							</li>
							<li>
								<a>Consectetur adipisicing elit</a>
							</li>
						</ul>
					</div>-->
					
					<!--
					<div class='span4'>
						<h5 class='footer-header'>Photostream</h5>
						<ul class='footer-img-list thumbnails'>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
							<li class='span1'>
								<a class='thumbnail'>
									<img alt="8b9890" src="assets/images/test-square.png" />
								</a>
							</li>
						</ul>
					</div>-->
				</div>
			</div>
		</div>
		
		<div class='deep-footer'>
			<div class='container'>
				<div class='row'>
					<div class='span6'>
						<div class='copyright'></div>
					</div>
					<div class='span6'>
						<ul class='footer-links'>
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Features &amp; Pricing</a>
							</li>
							<li>
								<a href="#">Documentation</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="./assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="./assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="./assets/js/prettify.js" type="text/javascript"></script>
	<script src="./assets/js/lightbox.js" type="text/javascript"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>
</body>
</html>
