<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <style type="text/css">
body {
	margin-top:40px;
}
.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 50%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
</style>

<head>
<title>SLBG | Register an owner And Bus</title>
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



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>








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
					<h1><a  href="index.html"><span>SL</span>BG</a></h1>
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
						
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Sales and Services</a></li>
						<li><a href="blog.php">News</a></li>
						<li class="active"><a href="signup.php">Bus Owners</a></li>
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
				<!-- Sign in form - start -->
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
				<!-- Sign in form - end -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	
	
	
	
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">					
						
						
						
							<div class="stepwizard col-md-offset-3">
								<div class="stepwizard-row setup-panel">
									<div class="stepwizard-step">
										<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
										<p>Step 1</p>
									</div>
									<div class="stepwizard-step">
										<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
										<p>Step 2</p>
									</div>
									<div class="stepwizard-step">
										<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
										<p>Step 3</p>
									</div>
									<div class="stepwizard-step">
										<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
										<p>Step 4</p>
									</div>
								</div>
							</div>
							
							
							<div class="faqs-top-grids">
							<form role="form" action="" method="post" class="form-horizontal">
								<div class="row setup-content col-md-12 center" id="step-1">
									<div class="col-xs-6 col-md-offset-3">
										<div class="col-md-12">
											<h3>1.Register an owner </h3>
											<div class="form-group">
												<label class="control-label">First Name</label>
												<input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
											</div>
											<div class="form-group">
												<label class="control-label">Last Name</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
											</div>
											<div class="form-group">
												<label class="control-label">NIC number</label>
												<input  maxlength="100" type="text" required="required" class="form-control" placeholder="NIC number of the Owner"  />
											</div>
											<div class="form-group">
												<label class="control-label">Address</label>
												<textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
											</div>
											<div class="form-group">
												<label class="control-label">District</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter your District" />
											</div>
											<div class="form-group">
												<label class="control-label">Contact number 1</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter your phone no" />
											</div>
											<div class="form-group">
												<label class="control-label">Contact number 2</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter your Dialog number if exist" />
											</div>
											<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
										</div>
									</div>
								</div>
								<div class="row setup-content col-md-12" id="step-2">
									<div class="col-xs-6 col-md-offset-3">
										<div class="col-md-12">
											<h3>2.register a bus</h3>
											<div class="form-group">
												<label class="control-label">Bus Name</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="Displaid Name of Bus" />
											</div>
											<div class="form-group">
												<label class="control-label">Registration No(plate number)</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="ex:  WP NF 999* "  />
											</div>
											<div class="form-group">
												<label class="control-label">Route Permit Registration No</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Route permit registration number"  />
											</div>
											<div class="form-group">
												<label class="control-label">Manufacture Type of Bus</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="ex: Leyland Viking" />
											</div>
											<div class="form-group">
												<label class="control-label">No. of seats</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="ex: 54"  />
											</div>
											<div class="form-group">
												<label class="control-label">Booking price</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter your expected booking price"  />
											</div>
											<div class="form-group">
												<label class="control-label">Facilities of Bus</label>
												<textarea required="required" class="form-control" placeholder="Enter the facilities ex: tv coach,headrest seats,surround sound" ></textarea>
											</div>
											<div class="form-group">
												<label class="control-label">Contact number 1</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Ticket machine sim card no:" />
											</div>
											<div class="form-group">
												<label class="control-label">Contact number 2</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter phone no:" />
											</div>
											<div class="form-group">
												<label class="control-label">Contact number 3</label>
												<input maxlength="100" type="text" required="required" class="form-control" placeholder="Contact no: for get ooking information" />
											</div>
											<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
										</div>
									</div>
								</div>
								<div class="row setup-content col-md-12" id="step-3">
									<div class="col-xs-6 col-md-offset-3">
										<div class="col-md-12">
										  <h3>3.Add route</h3>
										  <div class="form-group">
												<label class="control-label">Route No</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Route Number" />
											</div>
											<div class="form-group">
												<label class="control-label">From</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
											</div>
											<div class="form-group">
												<label class="control-label">To</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
											</div>
											<div class="form-group">
												<label class="control-label">Through</label>
												<input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
											</div>
											<div class="form-group">
												<label class="control-label">All Sections</label>
												<textarea required="required" class="form-control" placeholder="" ></textarea>
											</div>
										  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
										</div>
									</div>
								</div>
								<div class="row setup-content col-md-12" id="step-4">
									<div class="col-xs-6 col-md-offset-3">
										<div class="col-md-12">
										  <h3>3.Add route times</h3>
										  <div class="form-group">
												<label class="control-label">All Sections</label>
												<textarea required="required" class="form-control" placeholder="" ></textarea>
											</div>
											<div class="form-group">
												<label class="control-label">All Section times</label>
												<textarea required="required" class="form-control" placeholder="" ></textarea>
											</div>
										  <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
										</div>
									</div>
								</div>
								
							</form>
							<div class="clearfix"></div>
							</div>
							
						
						
						
						
				  
				  
						
						
						
						
						
						
						
						
							<!--
							<form>
								<p>First Name</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Last Name</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Phone Number</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Email Address</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Password</p>
								<input type="password" name="password" id="password">
								<p>Confirm Password</p>
								<input type="password" name="password" id="password">
								<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
								<input type="submit" id="login" value="Register">
							</form>
							
						</div>
					</div>
					<!--
					<div class="col-md-4 book-left book-right">
						<div class="book-left-info">
							<h3>Recommended</h3>
						</div>
						<div class="book-left-bottom">
							<div class="book-left-facebook">
								<a href="#">Connect with Facebook</a>
							</div>
							<div class="book-left-chrome">
								<a href="#">Connect with Google</a>
							</div>
						</div>
						<ul>
							<li>Access booking history with upcoming trips</li>
							<li>Print tickets and invoices</li>
							<li>Make checkouts simpler</li>
							<li>Enter your contact details only once</li>
							<li>Get alerts for low fares</li>
						</ul>
					</div>  
					<div class="clearfix"> </div>
				</div>
			</div>-->
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	
	
	
	
	
	
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Our Products</h4>
						<ul>
							<li><a href="index.html">Flight Schedule</a></li>
							<li><a href="flights-hotels.html">City Airline Routes</a></li>
							<li><a href="index.html">International Flights</a></li>
							<li><a href="hotels.html">International Hotels</a></li>
							<li><a href="bus.html">Bus Booking</a></li>
							<li><a href="index.html">Domestic Airlines</a></li>
							<li><a href="holidays.html">Holidays Trip</a></li>
							<li><a href="hotels.html">Hotel Booking</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="terms.html">Terms &amp; Conditions</a></li>
							<li><a href="privacy.html">Privacy </a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="booking.html">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Travel Resources</h4>
						<ul>
							<li><a href="holidays.html">Holidays Packages</a></li>
							<li><a href="weekend.html">Weekend Getaways</a></li>
							<li><a href="index.html">International Airports</a></li>
							<li><a href="index.html">Domestic Flights Booking</a></li>
							<li><a href="booking.html">Customer Support</a></li>
							<li><a href="booking.html">Cancel Bookings</a></li>
							<li><a href="booking.html">Print E-tickets</a></li>
							<li><a href="booking.html">Customer Forums</a></li>
							<li><a href="booking.html">Make a Payment</a></li>
							<li><a href="booking.html">Complete Booking</a></li>
							<li><a href="booking.html">Assurance Claim</a></li>
							<li><a href="booking.html">Retail Offices</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>More Links</h4>
						<ul class="chf_footer_list">
							<li><a href="#">Flights Discount Coupons</a></li>
							<li><a href="#">Domestic Airlines</a></li>
							<li><a href="#">Indigo Airlines</a></li>
							<li><a href="#">Air Asia</a></li>
							<li><a href="#">Jet Airways</a></li>
							<li><a href="#">SpiceJet</a></li>
							<li><a href="#">GoAir</a></li>
							<li><a href="#">Air India</a></li>
							<li><a href="#">Domestic Flight Routes</a></li>
							<li><a href="#">Indian City Flight</a></li>
							<li><a href="#">Flight Sitemap</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Toll Free No : <span>1234-5678-901</span></p>
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
						<p>Copyrights © 2015 Govihar . Design by eSS Softwares</p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


	
	
	
	
	
	
	


	<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
  
  
  
  
  
  
      <script type="text/javascript">
      function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
         return false;
      return true;
   }
      </script>











	  
</body>
</html>