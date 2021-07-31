<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body id="" class="en ">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9292VX" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>

	<h1>Contact Us</h1>
	<header class="container-fluid fixed">
		<nav class="row">
			<div class="col-xs col-sm-2 col-md-2 col-lg-2 logo-wrapper flex-md-shrink flex-lg-shrink"> <a
					href="index.html" class="logo"> <img
						src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_horizontal.svg?v=20210706154217"
						alt="Freight Right" /> </a> </div>
			<div id="menu"
				class="nav-wrapper col-xs col-md-10 col-lg-10 flex-md-grow flex-lg-grow show-md-flex show-lg-flex end-xs">
				<ul class="list list-flex">
					<li> <a href="{{url('/')}}" title="Home">Home</a> </li>
					
					<li> <a href="{{url('/about')}}" title="About Us">About Us</a> </li>
					
					<li> <a class="active" href="{{url('/contact-us')}}" title="Contact Us">Contact Us</a> </li>
					<li>
                        <a href="{{url('our-services')}}" title="Contact Us">Our Services</a>
                    </li>
                    <li> <a data-submenu="#submenu-track-a-shipment" href="#" title="Track a Shipment">Track a
							Shipment</a>
						<div id="submenu-track-a-shipment" class="subnav-wrapper">
							<div class="show-xs-flex flex-xs-column pr-xs-4 pt-xs-4 pb-xs-4 pl-xs-4">
								<p class="mb-lg-1 text-xs-center text-md-left">Enter Your Tracking Number</p>
								<form class="show-xs-flex flex-xs-column flex-md-row" method="POST"
									action="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx" target="_blank">
									<input type="hidden" name="__VIEWSTATE"
										value="/wEPDwUKLTQxMzExODgwNWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFClpDaGVja0JveDGwVjkmnufBggcIVtWdh179TwIP1g==">
									<input type="hidden" name="FindBtn" value="Find"> <input type="hidden"
										name="__EVENTVALIDATION"
										value="/wEdAAuOfNDRTdbqRG63ZhIJg2s55N6GKXPRi5S0DJMsHoMYt843Pz+KF0QwKGUPIy0Nq/LZR4N0D4H5HBFwywDx7UYoI7XYTiiV8Kq6dH9J82YOQTCiy8QkSzThMdjVlcCh87Dil0z6JziwC8YXwif7L6X53Lt2iPZwf5JRYNfIhT10GilUmQzDM3/ylWPOwJCThNPTdDYyJdSkBdHEr7sWz+wqBIRq5vIxFxx5aS8WNpiK+/CjBUoqeZ66DKYWRZJuaPACGEQ3">
									<input class="form-control mb-xs-2" type="text"
										name="ShipmentHousebillNumberTextbox" /> <button type="submit"
										class="text-uppercase btn btn-ouline-sm btn-outline btn-caret ml-lg-1 mb-xs-2">Track
										<svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
											focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
											<path fill="currentColor"
												d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
											</path>
										</svg></button> </form>
							</div>
						</div>
					</li>
					<li> <a data-submenu="#submenu-login" href="#" title="Login">Login</a>
						<div id="submenu-login" class="subnav-wrapper">
							<ul class="list list-flex" style="justify-content: flex-start;">
								<li style="max-height: 60px;"> <a href="https://customs.freightright.com/"
										target="_blank" class="text-xs-center show-xs-flex "> Customers </a> </li>
								<li style="max-height: 60px;"> <a
										href="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx/Login/Login.aspx?ReturnUrl=%2fDefault.aspx"
										class="text-xs-center show-xs-flex "> Supply Chain Visibility </a> </li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="hamburger-icon-wrapper col-xs hide-md hide-lg show-xs-flex end-xs middle-xs"> <a href="#"
					id="nav-hamb"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
				</a> </div>
		</nav>
	</header>
	<div class="wi-page-content">
		<div class="breadcrums-wrapper hide-xs hide-sm show-md-block show-lg-block">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs">
						<ul class="list list-unstyle">
							<li> <a href="{{url('/')}}" title="Home"> Home </a> </li>
							<li> &gt; </li>
							<li> <a href="{{url('contact-us')}}"> Contact Us </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-us">

			<section class="section section-xs contact-us-header">
				<div class="mask mask-50"></div>
				<div class="media-container media-container-bg"
					style="background-image: url({{asset('images/9849fd/contact-us/bg_contact_us_featured_default1350.jpg')}} )">
				</div>
				<div class="mask-overlay show-xs-flex middle-xs">
					<div class="container mt-xs-6 mt-lg-5">
						<div class="row text-xs-left">
							<div class="col-xs-12 text-xs-left">
								<img class="logo-featured mb-xs-1 mb-lg-2"
									src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_vertical.svg?v=20210706154217"
									alt="Freight Right">
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="boxes-wrapper" id="box-right-section">
				<div class="container-fluid">
					<div class="row text-xs-left start-xs">
						<div class="col-xs-12 col-md-7 col-lg-7">
							<div class="row end-xs text-xs-left mt-xs-4 mb-xs-6 mt-lg-6 mb-lg-5">
								<div class="col-xs-12 col-md-11 col-lg-10 pr-lg-10">
									<h2 class="text-dark-gray mb-lg-2 mb-xs-2"><b>Get in Touch</b></h2>
									<form method="POST" action="https://www.freightright.com/contact-us" class="wi-form"
										data-success-message="Thank you for contacting us. We will get back to you as soon as possible.">
										<div class="form-group">
											<label for="name">
												Your Name (required)
											</label>
											<input id="name" name="name" type="text" class="form-control" require />
										</div>
										<div class="form-group">
											<label for="email">
												Your Email (required)
											</label>
											<input type="email" name="email" class="form-control" require />
										</div>
										<div class="form-group">
											<label for="subject">
												Subject
											</label>
											<input id="subject" name="subject" type="text" class="form-control"
												require />
										</div>
										<div class="form-group">
											<label for="message">
												Message
											</label>
											<textarea id="message" name="message" class="form-control"
												rows="7"></textarea>
										</div>
										<div class="form-group">
											<label for="shipments">How many shipments does your company move in a
												year?</label>
											<select name="shipments" id="shipments" class="form-control">
												<option value="None - First time shipper">None - First time shipper
												</option>
												<option value="1- 25 Shipments">1- 25 Shipments</option>
												<option value="26 - 75 Shipments">26 - 75 Shipments</option>
												<option value="76 - 300 Shipments">76 - 300 Shipments</option>
												<option value="I am not a shipper">I am not a shipper</option>
												<option value="Not applicable">Not applicable</option>
											</select>
										</div>
										<div class="form-group text-md-right text-xs-center">
											<div class="g-recaptcha"
												data-sitekey="6Lf_5rAUAAAAAF5FpbIYqANhdDzaLwHVPPb8A0VV"></div>
											<br />
											<button type="submit"
												class="btn btn-save btn-outline btn-outline-dark-gray btn-outline-lg btn-caret">
												Submit <svg class="svg-inline--fa fa-chevron-right fa-w-10"
													aria-hidden="true" focusable="false" data-prefix="fas"
													data-icon="chevron-right" role="img"
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
													data-fa-i2svg="">
													<path fill="currentColor"
														d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
													</path>
												</svg></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-5 col-lg-5 bg-blue">
							<div class="row start-xs">
								<div class="col-xs-12 col-md-12 col-lg-10 mt-xs-5 mt-lg-6 mb-lg-5">
									<div class="pl-xs-1 pr-xs-1 pl-lg-4 pr-lg-4">
										<h2 class="text-white mb-lg-2 mb-xs-2"><b>Connect with us:</b></h2>
										<hr class="hr hr-white mb-xs-4 mb-lg-3" />
										<p class="text-white mb-xs-2 mb-lg-1">
											<b>Email:</b>
										</p>
										<p class="text-white">
											<a href="cdn-cgi/l/email-protection.html#432b262f2f2c032531262a242b37312a242b376d202c2e"
												class="link link-white"><span class="__cf_email__"
													data-cfemail="6f070a0303002f091d0a0608071b1d0608071b410c0002">[email&#160;protected]</span></a><br />
										</p>
										<hr class="hr hr-white mb-xs-4 mb-lg-3" />
										<p class="text-white mb-xs-2 mb-lg-1">
											<b>Phone:</b><br />
										</p>
										<ul class="list list-unstyle list-space mb-lg-2 mb-xs-4">
											<li>
												<a href="tel://8779097447" class="link link-white">1-877-909-7447</a>
											</li>
											<li>
												<a href="tel://8189371473" class="link link-white">1-818-937-1473</a>
											</li>
										</ul>
										<hr class="hr hr-white mb-xs-4 mb-lg-3" />
										<p class="text-white mb-xs-2 mb-lg-1">
											<b>Address:</b>
										</p>
										<div class="text-white" style="margin-bottom: 20px;">
											<p>4250 Pennsylvania Ave., Suite 206&nbsp;<br>La Crescenta, CA 91214</p>
										</div>
										<div class="contact-us-iframe">
											<iframe class="page-map" width="100%" height="400" frameborder="0"
												style="border:0"
												src="https://www.google.com/maps/embed/v1/place?q=4250%20Pennsylvania%20Ave.%2CSuite%20206%20La%2BCrescenta%2C%20CA%2091214&amp;key=AIzaSyC6l7RDO6vxKRh0ty1jvQeDEETWNnODgiY"
												allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
	<nav id="back-top"><svg class="svg-inline--fa fa-angle-double-up fa-w-10" aria-hidden="true" focusable="false"
			data-prefix="fas" data-icon="angle-double-up" role="img" xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 320 512" data-fa-i2svg="">
			<path fill="currentColor"
				d="M177 255.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 351.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 425.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1zm-34-192L7 199.7c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l96.4-96.4 96.4 96.4c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9l-136-136c-9.2-9.4-24.4-9.4-33.8 0z">
			</path>
		</svg></nav>
	<footer>
		<div class="mask mask-40"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs bg-blue flex-xs-grow">
					<div class="row hide-xs show-md-flex show-lg-flex">
						<div class="col-xs text-xs-center"> <a href="index.html" class="logo-footer"> <img
									data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_vertical.svg?v=20210706154217"
									class="lozad" alt="Freight Right" /> </a> </div>
					</div>
					<div class="row footer-box-wrapper">
						<div class="col-xs hide-xs hide-sm show-md-block show-lg-block footer-email-wrapper">
							<div class="footer-box text-xs-center">
								<p class="text-white">Email</p>
								<p><a href="contact-us.html" class="link link-white"><span class="__cf_email__"
											data-cfemail="3d55585151527d5b4f58545a55494f545a5549135e5250">[email&#160;protected]</span></a>
								</p> <a href="contact-us.html" class="btn btn-outline btn-outline-white btn-caret">Email
									Us Now <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
										focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
										<path fill="currentColor"
											d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
										</path>
									</svg></a>
							</div>
						</div>
						<div class="col-xs hide-xs hide-sm show-md-block show-lg-block footer-phone-wrapper">
							<div class="footer-box text-xs-center">
								<p class="text-white">Phone</p>
								<p><a href="tel://8779097447" class="link link-white">1-877-909-7447</a></p> <a
									href="tel://8779097447"
									class="btn btn-outline btn-outline-white btn-caret text-uppercase">Call Us Now <svg
										class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
										focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
										<path fill="currentColor"
											d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
										</path>
									</svg></a>
							</div>
						</div>
						<div class="col-xs footer-social-media-wrapper">
							<div class="footer-box text-xs-center">
								<p class="text-white hide-xs hide-sm show-md-block show-lg-block">Social Media</p>
								<ul class="list list-flex flex-xs-row around-xs">
									<li> <a target="_blank" href="https://www.facebook.com/FreightRight/"
											title="Facebook"> <img
												data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_facebook.svg?v=20210706154217"
												class="lozad" alt="Facebook" width="45" height="45" /> </a> </li>
									<li> <a target="_blank" href="https://twitter.com/RightFreight" title="Twitter">
											<img data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_twitter.svg?v=20210706154217"
												class="lozad" alt="Twitter" width="45" height="45" /> </a> </li>
									<li> <a target="_blank" href="https://goo.gl/maps/sYfQ1TwA2bysqq9H6"
											title="Google Marketplace"> <img
												data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_google_marketplace.svg?v=20210706154217"
												class="lozad" alt="Google Marketplace" width="45" height="45" /> </a>
									</li>
									<li> <a target="_blank" href="https://www.linkedin.com/company/1367445"
											title="LinkedIn"> <img
												data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_linkedin.svg?v=20210706154217"
												class="lozad" alt="LinkedIn" width="45" height="45" /> </a> </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row menu-footer-wrapper">
						<div class="col-xs">
							<ul class="list list-flex flex-xs-row around-md around-lg between-xs between-sm">
								<li> <a href="{{url('about-us')}}" title="About Us">About Us</a> </li>
								<li> <a href="{{url('privacy')}}" title="Privacy Policy">Privacy Policy</a> </li>
								<li> <a href="{{url('terms')}}" title="Terms Of Use">Terms Of Use</a> </li>
								<li> <a href="{{url('tos')}}" title="Terms Of Use">Terms Of Service</a> </li>
								<li class="hide-xs hide-sm show-md-flex show-lg-flex"> <a href="{{url('contact-us')}}"
										title="Contact Us">Contact Us</a> </li>
							</ul>
						</div>
					</div>
					<div class="row copyright-wrapper">
						<div class="col-xs text-xs-left text-md-center text-sm-left text-lg-center"> Copyright © 2021
							Freight Right Global Logistics </div>
					</div>
				</div>
				<div class="col-xs bg-light-blue show-xs-flex hide-md hide-lg flex-xs-shrink"> <a
						href="tel://8779097447" class="footer-mobile-phone text-uppercase" title="Call Us Now"> <i
							class="fas fa-phone"></i><br />Call Us Now</a> </div>
			</div>
		</div>
	</footer>
	<div id="wi-preview"></div> <span id="wi-preview-close">&#10005;</span>
	<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor-lite.js')}}"></script>
    <script src="{{asset('js/app1350.js')}}"></script>
   <script src="{{asset('js/email-decode.min.js')}}"></script>    
	<script src="/www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>