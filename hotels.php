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
						Hotels
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="hotels.php"> Hotels</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start destinations Area -->
	<section class="destinations-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Popular Hotels</h1>
						<p>Visit our exotic Hotels</p>
					</div>
				</div>
			</div>
			<div id="india_price_list" class="row">
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\court.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Mountain Courtyard</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹6200</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\kumarakom-lake-resort.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Kumarakom Lake Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹7500</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\shah.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Shahpura House</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹5500</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\munar.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Tall Trees Munnar</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹4500</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\holiday-i.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Holiday Inn Cochin</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹3500</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\tea.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Munnar Tea Country Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">₹2500</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div style="display:none" id="usa_price_list" class="row">
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\court.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Mountain Courtyard</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>No</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>No</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$75.63</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\kumarakom-lake-resort.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Kumarakom Lake Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$91.48</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\shah.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Shahpura House</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$67.09</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\munar.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Tall Trees Munnar</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$54.89</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\holiday-i.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Holiday Inn Cochin</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$42.69</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\tea.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Munnar Tea Country Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">$30.49</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div style="display:none" id="eur_price_list" class="row">
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\court.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Mountain Courtyard</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€76.33</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\kumarakom-lake-resort.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Kumarakom lake Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€92.34</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\shah.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Shahpura House</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€67.71</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\munar.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>The Tall Trees Munnar</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€55.40</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\holiday-i.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Holiday Inn Cochin</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€43.09</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img\packages\tea.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Munnar Tea Country Resort</span>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</h4>
							<p>
								View on map | 49 Reviews
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span>Swimming pool</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Gymnesium</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Wi-fi</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Room Service</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Air Condition</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Restaurant</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Price per night</span>
									<a href="payment.php" class="price-btn">€30.78</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End destinations Area -->


	<!-- Start home-about Area -->
	<section class="home-about-area">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-6 col-md-12 home-about-left">
					<h1>
						Did not find your<br> Hotel? <br>
						Feel free to ask us. <br>
						We‘ll make it for you.
					</h1>
					<p>
						
					</p>
					<a href="#" class="primary-btn text-uppercase">request custom price</a>
				</div>
				<div class="col-lg-6 col-md-12 home-about-right no-padding">
					<img class="img-fluid" src="img/hotel.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- start footer Area 		
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