<?php
include 'db_config.php';
session_start();

include 'header.php';
?>



<!-- start banner Area -->
<section class="banner-area relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-between">
			<div class="col-lg-6 col-md-6 banner-left">
				<h6 class="text-white"></h6>
				<h1 class="text-white">Planet Travel</h1>
				<p class="text-white">
				</p>
				<!--<a href="#" class="primary-btn text-uppercase">Get Started</a>-->
			</div>
			<!--<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Holidays</a>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
								<form class="form-wrap">
									<input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
									<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
									<input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
									<input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
									<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
									<a href="#" class="primary-btn text-uppercase">Search flights</a>									
								</form>
							  </div>
							  <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
								<form class="form-wrap">
									<input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
									<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
									<input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
									<input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
									<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">						
									<a href="#" class="primary-btn text-uppercase">Search Hotels</a>									
								</form>							  	
							  </div>
							  <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
								<form class="form-wrap">
									<input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
									<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
									<input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
									<input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
									<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
									<a href="#" class="primary-btn text-uppercase">Search Holidays</a>									
								</form>							  	
							  </div>
							</div>
						</div>-->
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Popular Destinations</h1>
					<p>Visit our Exotic Destinations</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="single-destination relative">
					<div class="thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="img\dal.jpg" alt="">
					</div>
					<div class="desc">
						<!-- <a href="#" class="price-btn">$150</a> -->
						<h4>Bodies of water</h4>
						<p>Dal Lake</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-destination relative">
					<div class="thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="img\hawa.jpg" alt="">
					</div>
					<div class="desc">
						<!-- <a href="#" class="price-btn">$250</a> -->
						<h4>Architectural Buildings</h4>
						<p>Hawa Mahal - Palace of Wind</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-destination relative">
					<div class="thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="img/d3.jpg" alt="">
					</div>
					<div class="desc">
						<!-- <a href="#" class="price-btn">$350</a> -->
						<h4>Nature & Wildlife Areas</h4>
						<p>Binsar Wildlife Sanctuary</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End popular-destination Area -->


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
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Pilgrimage Tourism Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>Meenakshi temple</span>
							<a href="payment.php" class="price-btn">₹45500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Golden temple</span>
							<a href="payment.php" class="price-btn">₹65000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Jagannath temple</span>
							<a href="payment.php" class="price-btn">₹85000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Mata Vaishno Devi Temple</span>
							<a href="payment.php" class="price-btn">₹75000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Badrinath Temple</span>
							<a href="payment.php" class="price-btn">₹85000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Dwarka</span>
							<a href="payment.php" class="price-btn">₹75000</a>
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
							<a href="payment.php" class="price-btn">₹75000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Gangtok</span>
							<a href="payment.php" class="price-btn">₹65000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Goa</span>
							<a href="payment.php" class="price-btn">₹65000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Kerala</span>
							<a href="payment.php" class="price-btn">₹76000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Ladakh</span>
							<a href="payment.php" class="price-btn">₹85000</a>
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
							<a href="payment.php" class="price-btn">₹45500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Ladakh</span>
							<a href="payment.php" class="price-btn">₹77000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Sikkim</span>
							<a href="payment.php" class="price-btn">₹85000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Andaman and Nicobar Islands</span>
							<a href="payment.php" class="price-btn">₹65000</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Arunachal Pradesh</span>
							<a href="payment.php" class="price-btn">₹55000</a>
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
					
			</div>
		</div>
	</div>
</section>
<!-- End other-issue Area -->


<!-- Start testimonial Area
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
						<img class="img-fluid" src="img/elements/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
						</p>
						<h4>Anushka Sharma</h4>
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
						<img class="img-fluid" src="img/elements/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
						</p>
						<h4>Caterin</h4>
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
						<img class="img-fluid" src="img/elements/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
						</p>
						<h4>Deepika Padukone</h4>
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
						<img class="img-fluid" src="img/elements/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
						</p>
						<h4>Esha Chawla</h4>
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
						<img class="img-fluid" src="img/elements/user1.png" alt="">
					</div>
					<div class="desc">
						<p>
							Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
						</p>
						<h4>Katrina Kaif</h4>
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
						<img class="img-fluid" src="img/elements/user2.png" alt="">
					</div>
					<div class="desc">
						<p>
							A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
						</p>
						<h4>Anupama Parameswaran</h4>
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
 End testimonial Area -->

<!-- Start home-about Area -->
<section class="home-about-area">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-end">
			<div class="col-lg-6 col-md-12 home-about-left">
				<h1>
					Did not find your Package? <br>
					Feel free to ask us. <br>
					We‘ll make it for you
				</h1>
				<p>
					
				</p>
				<a href="#" class="primary-btn text-uppercase">request custom price</a>
			</div>
			<div class="col-lg-6 col-md-12 home-about-right no-padding">
				<img class="img-fluid" src="img/about-img.jpg" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End home-about Area -->



<!--	<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$databasename = "travel";

		$conn = new mysqli('localhost', 'root', '', 'travel') or die("connection failed:" . mysqli_connect_error());
		mysqli_set_charset($conn, "utf8");

		?>

<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>firstname</th>
<th>surname</th>
<th>password</th>
<th>email</th>
<th>phonenumber</th>
<th>image</th>
<th>pdf</th>
<th>action</th>
</tr>
<?php
$select = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_array($select)) {
?>
 <tr id="row<?php echo $row['id']; ?>">
  <td id="firstname_val<?php echo $row['id']; ?>"><?php echo $row['firstname']; ?></td>
  <td id="surname_val<?php echo $row['id']; ?>"><?php echo $row['surname']; ?></td>
  <td id="password_val<?php echo $row['id']; ?>"><?php echo $row['password']; ?></td>
  <td id="email_val<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
  <td id="phonenumber_val<?php echo $row['id']; ?>"><?php echo $row['phonenumber']; ?></td>
  <td id="image_val<?php echo $row['id']; ?>"><img src="<?php echo $row['image']; ?>" style="width:50px; height:50px;"></td>
  <td id="pdf_val<?php echo $row['id']; ?>"><?php echo $row['pdf']; ?></td>
  <td>
   <a class="btn btn-dark" href="edit_index.php?edit_id=<?php echo $row['id'] ?>" id="edit_button">edit</a>
   <!-- <input type='button' class="save_button" id="save_button<?php echo $row['id']; ?>" value="save" onclick="save_row('<?php echo $row['id']; ?>');"> 
   
   <button class="btn btn-danger"><a href="delete_index.php?deleteid=<?php echo $row['id']; ?>" class="text-light">Delete</a></button>
  </td>
 </tr>
 <?php
}
	?>-->


<!-- start footer Area -		
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
			<!--End footer Area -->
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