<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SLBG</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>SL</span>BG</a></h1>
				</div>
				<!--navbar-header-->
				<div class="header-dropdown">
					<div class="emergency-grid">
						<ul>
							<li>Contact us : </li>
							<li class="call">+94 712 097 337</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="products.php">Sales and Services</a></li>
						<li><a href="blog.php">News</a></li>
						<li><a href="signup.php">Bus Owners</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>			
							
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
					<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
											<span><a href="#">Forgot your password?</a></span>
											<div class="or-grid">
												<p>OR</p>
											</div>
											<div class="social-sits">
												<div class="facebook-button">
													<a href="#">Connect with Facebook</a>
												</div>
												<div class="chrome-button">
													<a href="#">Connect with Google</a>
												</div>
												<div class="button-bottom">
													<p>New account? <a href="signup.html">Signup</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner bus-banner">
		<!-- container -->
		<div class="container">
			<!--booking form-->
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info about-booking-info">
						<h2>Book Bus Tickets Online</h2>
					</div>
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
						  <!---->		  	 
									<div class="facts about-facts">
										<div class="booking-form">
										<link rel="stylesheet" href="css/jquery-ui.css" />
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
												<div class="b_room">
															<div class="booking_room">
																<div class="reservation">
																	<ul>
																		<li class="span1_of_1 left">
																			 <h5>From</h5>
																			 <div class="section_room">
																				<select id="from" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																				</select>
																			 </div>	
																		</li>
																		<li class="span1_of_1 left">
																			 <h5>To</h5>
																			 <div class="section_room">
																				<select id="to" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																				</select>
																			 </div>	
																		</li> 
																		<!--
																		<li class="span1_of_1 desti">
																			 <h5>From</h5>
																			 <div class="book_date">
																				 <form>
																					<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																					<input type="text" placeholder="Select Departure City" class="typeahead1 input-md form-control tt-input" required="">
																				 </form>
																			 </div>					
																		 </li>
																		 <li class="span1_of_1 left desti">
																			 <h5>To</h5>
																			 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="Select Destination City" class="typeahead1 input-md form-control tt-input" required="">
																			 </form>
																			 </div>		
																		 </li>
																		 -->
																		 <div class="clearfix"></div>
																	</ul>
																</div>
																<div class="reservation">
																	<ul>	
																		<li  class="span1_of_1">
																			 <h5>Departing</h5>
																			 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																				<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																			</form>
																			 </div>		
																		 </li>
																		 <!--
																		 <li class="span1_of_1 left">
																			 <h5>Adults (18+)</h5>
																			 //----------start section_room-----------
																			 <div class="section_room">
																				  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																						<option value="null">1</option>
																						<option value="null">2</option>         
																						<option value="AX">3</option>
																						<option value="AX">4</option>
																						<option value="AX">5</option>
																						<option value="AX">6</option>
																				  </select>
																			 </div>	
																		</li>
																		<li class="span1_of_1 left">
																			 <h5>Children (0-17)</h5>
																			 //----------start section_room-----------
																			 <div class="section_room">
																				  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																						<option value="null">1</option>
																						<option value="null">2</option>         
																						<option value="AX">3</option>
																						<option value="AX">4</option>
																						<option value="AX">5</option>
																						<option value="AX">6</option>
																				  </select>
																			 </div>	
																		</li> -->
																		 <div class="clearfix"></div>
																	</ul>
																</div>
																<div class="reservation">
																	<ul>	
																		 <li class="span1_of_3">
																				<div class="date_btn">
																					<form>
																						<input type="submit" value="Search">
																					</form>
																				</div>
																		 </li>
																		 <div class="clearfix"></div>
																	</ul>
																</div>
															</div>
															<div class="clearfix"></div>
												</div>
											</div>
											<!---->
										</div>	
									</div>
					</div>	
				</div>
			</div>
			<!--Image slider-->
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/5.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/6.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/7.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/8.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/6.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Register your Bus with us free of cost.<a href="signup.html">Here</a></div>
		<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<!-- Top routs - start -->
				<div class="col-md-4 banner-bottom-grid">
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Routs</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t1.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Badulla - Colombo</a>
									<p>thrugh bus way</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t2.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t3.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t4.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					
					<div class="choose">
					</div>
				</div>
				<!-- Top routs - end -->
				<!-- Top service providers - start -->
				<div class="col-md-4 banner-bottom-grid">
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Service Providers</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t1.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t2.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t3.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t4.jpg" alt="">
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Top service providers - end -->
				
				<div class="col-md-4 banner-bottom-grid">
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Our Advantages</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   	
								<div class="date-text" style="overflow: hidden; display: block; height: 2.79634272674464px; margin-top: 0px; margin-bottom: 0.575717620212133px; padding-top: 0px; padding-bottom: 0px;">
										<a href="single.html">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div><div class="date-text" style="overflow: hidden; display: block;">
										<a href="single.html">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div><div class="date-text" style="overflow: hidden; display: block;">
										<a href="single.html">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div><div class="date-text" style="overflow: hidden; display: block;">
										<a href="single.html">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div><div class="date-text" style="overflow: hidden; display: block;">
										<a href="single.html">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div></div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- //date -->
						</div>
					</div>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.html"><img src="images/a3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/a2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/a4.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/a1.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Menu</h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="bus.html">Sales and Services</a></li>
							<li><a href="index.html">News</a></li>
							<li><a href="hotels.html">Bus Owners</a></li>
							<li><a href="holidays.html">About Us</a></li>
							<li><a href="hotels.html">Contact Us</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="terms.html">Terms &amp; Conditions</a></li>
							<li><a href="privacy.html">Privacy </a></li>
							<li><a href="booking.html">Feedback</a></li>
							<li><a href="booking.html">Customer Support</a></li>
							<li><a href="booking.html">Make a Payment</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							
							
							
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="blog.html">Blog</a></li>
							
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Travel Resources</h4>
						<ul>
						
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>More Links</h4>
						<ul class="chf_footer_list">
							
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Contact us : <span>+94 712 397 373</span></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //news-letter -->
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="images/app1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/app2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/app3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="images/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 SLBG . Design by <a href="#">eSS softwares</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>