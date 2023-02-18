	<?php

	include 'db_config.php';
	session_start();
	include 'header.php';

	?>





	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Travels
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="insurance.html"> Travels</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start insurence-one Area -->
	<section class="insurance-one-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 insurence-left">
					<img class="img-fluid img-one" src="\travel\travelista-master\img\car2.webp" alt="">
				</div>
				<div class="col-lg-6 insurence-right">
					<h6 class="text-uppercase">Need to know</h6>
					<h1>Taxi services</h1>
					<p>
						Are you looking to book a cab for your next trip? BetterTaxi has everything you need to compare taxi prices and book online before you travel. With BetterTaxi, you can pre-book your ground transport so it’s as simple as stepping out of your hotel and into a taxi.
					</p>
					<div class="list-wrap">
						<ul>
							<li>Strategic approach towards redesigning brand.</li>
							<li>logo design strategy ensures a perfectly crafted
								logo for your business.</li>
							<li>Branding that stands out in the crowd.</li>
							<li>Modern and evergreen logo for your business.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End insurence-one Area -->

	<!-- Start insurence-two Area -->
	<section class="insurence-two-area pb-120">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 insurence-left">
					<h6 class="text-uppercase">Need to know</h6>
					<h1>Self-Drive Cars</h1>
					<p>
						
					</p>
					<div class="list-wrap">
						<ul>
							<li>Strategic approach towards redesigning brand.</li>
							<li>logo design strategy ensures a perfectly crafted
								logo for your business.</li>
							<li>Branding that stands out in the crowd.</li>
							<li>Modern and evergreen logo for your business.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 insurence-right">
					<img class="img-fluid img-two" src="img/insurence/i2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End insurence-two Area -->
	<!-- Start price Area -->
	<section class="price-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">We Provide Affordable Prices</h1>
						<p></p>
					</div>
				</div>
			</div>
			<div id="india_price_list" class="row">
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Taxi services</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">₹3000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day </span>
								<a href="payment.php" class="price-btn">₹8000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">₹10000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">₹15000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">₹20000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">₹30000</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Self-drive cars</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">₹2500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day</span>
								<a href="payment.php" class="price-btn">₹5000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">₹8000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">₹9000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">₹15000</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">₹25000</a>
							</li>
						</ul>
					</div>
				</div>
				<!--<div class="col-lg-4">
							<div class="single-price">
								<h4>Camping Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>	-->
			</div>
			<div style="display:none;" id="eur_price_list" class="row">
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Taxi services</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">€36.79</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day </span>
								<a href="payment.php" class="price-btn">€98.10</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">€122.63</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">€183.94</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">€245.26</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">€367.89</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Self-drive cars</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">€30.66</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day</span>
								<a href="payment.php" class="price-btn">€61.31</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">€98.10</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">€110.37</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">€183.94</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">€306.57</a>
							</li>
						</ul>
					</div>
				</div>
				<!--<div class="col-lg-4">
							<div class="single-price">
								<h4>Camping Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>	-->
			</div>
			<div style="display:none;" id="usa_price_list" class="row">
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Taxi services</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">$36.54</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day </span>
								<a href="payment.php" class="price-btn">$97.44</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">$121.80</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">$182.70</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">$243.59</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">$365.39</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-price">
						<h4>Self-drive cars</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>10 hours</span>
								<a href="payment.php" class="price-btn">$30.45</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one day</span>
								<a href="payment.php" class="price-btn">$60.90</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>3 days</span>
								<a href="payment.php" class="price-btn">$97.44</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one week</span>
								<a href="payment.php" class="price-btn">$109.62</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>15 days</span>
								<a href="payment.php" class="price-btn">$182.70</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>one month</span>
								<a href="payment.php" class="price-btn">$304.49</a>
							</li>
						</ul>
					</div>
				</div>
				<!--<div class="col-lg-4">
							<div class="single-price">
								<h4>Camping Packages</h4>
								<ul class="price-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>New York</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Maldives</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sri Lanka</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nepal</span>
										<a href="#" class="price-btn">$1500</a>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Thiland</span>
										<a href="#" class="price-btn">$1500</a>
									</li>	
									<li class="d-flex justify-content-between align-items-center">
										<span>Singapore</span>
										<a href="#" class="price-btn">$1500</a>
									</li>														
								</ul>
							</div>
						</div>	-->
			</div>
		</div>
	</section>
	<!-- End price Area -->


	<!-- start footer Area --		
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Agency</h6>
								<p>
									The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Team</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.									
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
	<section class="hot-deal-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<!--<div class="col-lg-6 col-md-6 banner-right">-->
					<div class="tab-content" id="myTabContent">
						<form class="form-wrap" action="book.php" method="" enctype="multipart/form-data">

							<!--<form action="/action_page.php">-->


							<h2>Please select.</h2>
							<hr>
							<label for="" class="form-control"><b>From</b>
								<select id="rate" class="form-control">
									<option value="">Mumbai</option>
									<option value="">pune</option>
									<option value="">Khandala</option>
									<option value="">Mahabaleshwar</option>
									<option value="">Goa</option>
									<option value="">Aurangabad</option>
									<option value="">Nashik</option>
									<option value="">Silvassa</option>
									<option value="">Alibaug</option>
									<option value="">Matheran</option>
								</select>
							</label><BR>


							<label for="" class="form-control"><b>Destination</b>
								<select id="rate" class="form-control">
									<option value="">Mumbai</option>
									<option value="">pune</option>
									<option value="">Khandala</option>
									<option value="">Mahabaleshwar</option>
									<option value="">Goa</option>
									<option value="">Aurangabad</option>
									<option value="">Nashik</option>
									<option value="">Silvassa</option>
									<option value="">Alibaug</option>
									<option value="">Matheran</option>
								</select>

							</label>

							<button type="submit" name="" class="registerbtn">search</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
							<script>
								function myFunction() {

									var country = document.getElementById("country").value;

									if (country == "USD") {
										document.getElementById("india_price_list").style.display = "none";
										document.getElementById("usa_price_list").style.display = "";
										document.getElementById("eur_price_list").style.display = "none";
									} else if (country == "INR") {
										document.getElementById("india_price_list").style.display = "";
										document.getElementById("eur_price_list").style.display = "none";
										document.getElementById("usa_price_list").style.display = "none";
									} else if (country == "EUR") {

										document.getElementById("india_price_list").style.display = "none";
										document.getElementById("eur_price_list").style.display = "";
										document.getElementById("usa_price_list").style.display = "none";
									}

								}
							</script>

							<script src="js/vendor/jquery-2.2.4.min.js"></script>
							<script src="js/popper.min.js"></script>
							<script src="js/vendor/bootstrap.min.js"></script>
							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
							<script src="js/jquery-ui.js"></script>
							<script src="js/easing.min.js"></script>
							<script src="js/hoverIntent.js"></script>
							<script src="js/superfish.min.js"></script>
							<script src="js/jquery.ajaxchimp.min.js"></script>
							<script src="js/jquery.magnific-popup.min.js"></script>
							<script src="js/jquery.nice-select.min.js"></script>
							<script src="js/owl.carousel.min.js"></script>
							<script src="js/mail-script.js"></script>
							<script src="js/main.js"></script>
							</body>

							</html>