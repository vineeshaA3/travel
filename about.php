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
					About Us
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.html"> About Us</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start about-info Area -->
<section class="about-info-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 info-left">
				<img class="img-fluid" src="img/about/info-img.jpg" alt="">
			</div>
			<div class="col-lg-6 info-right">
				<h6>About Us</h6>
				<h1>Who We Are?</h1>
				<p>
					Our mission is to be the leading and most trustworthy Travel Management Company that sets the standard for professionalism, reliability and transparency to its customers.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End about-info Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">We Provide Affordable Prices</h1>
					<p>Our website is going to provide at affordable prices</p>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Cheap Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>New York</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Maldives</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Sri Lanka</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Nepal</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Thiland</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Singapore</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Luxury Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>New York</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Maldives</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Sri Lanka</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Nepal</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Thiland</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Singapore</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Camping Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>New York</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Maldives</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Sri Lanka</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Nepal</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Thiland</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Singapore</span>
							<a href="payment.php" class="price-btn">₹1500</a>
						</li>
					</ul>
				</div>
			</div>
		</div>--->
	</div>
	<div id="india_price_list" class="row">
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Pilgrimage Tourism Packages </h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>Meenakshi temple</span>
						<a href="payment.php" class="price-btn">₹50000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Golden temple</span>
						<a href="payment.php" class="price-btn">₹45000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span> Jagannath temple</span>
						<a href="payment.php" class="price-btn">₹55000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Mata Vaishno Devi Temple</span>
						<a href="payment.php" class="price-btn">₹65000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Badrinath Temple</span>
						<a href="payment.php" class="price-btn">₹75000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Dwarka</span>
						<a href="payment.php" class="price-btn">₹65000</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Weekend Getaways Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>Ooty</span>
						<a href="payment.php" class="price-btn">₹50000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Darjeeling</span>
						<a href="payment.php" class="price-btn">₹45000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Gangtok</span>
						<a href="payment.php" class="price-btn">₹55000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Goa</span>
						<a href="payment.php" class="price-btn">₹65000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Kerala</span>
						<a href="payment.php" class="price-btn">₹75000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Ladakh</span>
						<a href="payment.php" class="price-btn">₹55000</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Adventure Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>Uttarakhand</span>
						<a href="payment.php" class="price-btn">₹55000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Ladakh</span>
						<a href="payment.php" class="price-btn">₹75000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sikkim</span>
						<a href="payment.php" class="price-btn">₹65000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Andaman and Nicobar Islands</span>
						<a href="payment.php" class="price-btn">₹55000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Arunachal Pradesh</span>
						<a href="payment.php" class="price-btn">₹50000</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Jammu Kashmir</span>
						<a href="payment.php" class="price-btn">₹45000</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div style="display: none;" id="usa_price_list" class="row">
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Cheap Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">$500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Luxury Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Camping Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">$1500</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div style="display: none;" id="eur_price_list" class="row">
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Cheap Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">€500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Luxury Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="single-price">
				<h4>Camping Packages</h4>
				<ul class="price-list">
					<li class="d-flex justify-content-between align-items-center">
						<span>New York</span>
						<a href="payment.php" class="price-btn">€150</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Maldives</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Sri Lanka</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Nepal</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Thiland</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<span>Singapore</span>
						<a href="payment.php" class="price-btn">€1500</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>

</section>
<!-- End price Area -->


<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-9">
				<div class="title text-center">
					<h1 class="mb-10">Other issues we can help you with</h1>
					<p>We all live in an age that belongs to the young at heart. Life that is.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-other-issue">
					<div class="thumb">
						<img class="img-fluid" src="img/o1.jpg" alt="">
					</div>
					<a href="#">
						<h4>Rent a Car</h4>
					</a>
					<p>
						The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-other-issue">
					<div class="thumb">
						<img class="img-fluid" src="img/o22.jpg" alt="">
					</div>
					<a href="#">
						
			<div class="col-lg-3 col-md-6">
				<div class="single-other-issue">
					<div class="thumb">
						<img class="img-fluid" src="iwmg/o3.jpg" alt="">
					</div>
					<a href="#">
						<h4>To Do List</h4>
					</a>
					<p>
						The following article covers a topic that has recently moved to center stage–at least it seems.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-other-issue">
					<div class="thumb">
						<img class="img-fluid" src="img/o4.wjpg" alt="">
					</div>
					<a href="#">
						
	</div>
</section>
<!-- End other-issue Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Testimonial from our Clients</h1>
					<p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-testimonial">
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elemwents/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							I am absolutely happy and satisfied with the overall seamless experience. I appreciate the sales and operations team for maintaining active communication and instantly resolving my queries
						</p>
						<h4>Sakshi</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elemwents/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							Thanks a Lot to Rakesh for tour Arrangements and giving us a memorable Trip Experience.110% pleased with the Services. 
						</p>
						<h4>Pratham More</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elemwents/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							I really was doubtful before starting my journey. But trust me, this travel planet service was just amazing. We never ever found any difficult throughout the trip. Whatever the quote itinerary they have sent, they just obeyed it. And the cab driver was tooooooooo good. Overall super. 
						</p>
						<h4>Vineesha</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elewments/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							A very well managed package provided we enjoyed a lot.hotels are very good and clean and services are very best .cab driver is very friendly it's a value for money package provided worth it.
						</p>
						<h4>Furqan</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elemewnts/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							We had really a very amazing time during the Madurai trip. Awesome cab service, hotels, sight seeing's.Appreciate your involvement in dealing with minutes of things thought out the trip. Would love to enjoy your service in future as well.
						</p>
						<h4>Arun</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="single-testimonial item d-flex flex-row">
					<div class="thumb">
						<img class="img-fluid" src="img/elemenwts/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							Very Nicely arranged tour. All hotels given in the tour were very good. Thanks for making our holiday a great experience.
						</p>
						<h4>Ananya</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End testimonial Area -->

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
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
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