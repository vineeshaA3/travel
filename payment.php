<?php

include 'db_config.php';
session_start();
if (isset($_SESSION['uid'])) {
	$usql = mysqli_query($conn, "SELECT * FROM `USERS` WHERE 'id'='" . $_SESSION['uid'] . "'");
	$user = mysqli_fetch_array($usql);
	$user_row = mysqli_num_rows($usql);
}


?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Travel</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styles.css">



	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-6 header-top-left">
						<!--<li><a href="#">Buy Tickets</a></li>-->
						</ul>-->
					</div>
					<!--<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>-->
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="packages.php">Packages</a></li>
						<li><a href="hotels.php">Hotels</a></li>
						<li><a href="insurance.php">Travels</a></li>
						<li><a href="currency.php">Forex</a></li>

						<!--<li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="blog-home.html">Blog Home</a></li>
				              <li><a href="blog-single.html">Blog Single</a></li>
				            </ul>
				          </li>	
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				            	  <li><a href="elements.html">Elements</a></li>
						          <li class="menu-has-children"><a href="">Level 2 </a>
						            <ul>
						              <li><a href="#">Item One</a></li>
						              <li><a href="#">Item Two</a></li>
						            </ul>
						          </li>					                		
				            </ul>
				          </li>	-->
						<li><a href="contact.php">Contact</a></li>
						<?php
						if (!isset($_SESSION['email'])) {
						?>
							<li><a href="login.php">Profile</a></li>
						<?php } else { ?>
							<li><a href="profile.php">Profile</a></li>
						<?php } ?>

						<?php
						if (!isset($_SESSION['email'])) {

						?>

							<li><a href="login.php">Login</a></li>
						<?php } else { ?>
							<li><a href="logout.php">logout</a></li>
						<?php } ?>

						<!--<li><a href="login.php">Login</a></li>-->
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="relative about-banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Payment
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="payment.php"> payment Now</a></p>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid">
		<div class="creditCardForm">
			<div class="heading">
				<h1>Confirm Payment</h1>
			</div>
			<div class="payment">
				<form name="myForm" onsubmit="return validateForm()" method="post">
					<div class="form-group owner">
						<label for="owner">Card Holder Name</label>
						<input type="text" name="fname" class="form-control" id="owner">
					</div>
					<div class="form-group CVV">
						<label for="cvv">CVV</label>
						<input type="text" class="form-control" id="cvv">
					</div>
					<div class="form-group" id="card-number-field">
						<label for="cardNumber">Card Number</label>
						<input type="text" name="cardnum" class="form-control" id="cardNumber">
					</div>
					<div class="form-group" id="expiration-date">
						<label>Expiration Date</label>
						<div class="row align-items-center ">
							<div class="col-m-4">
								<select>
									<option value="01">January</option>
									<option value="02">February </option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>

							<div class="col-m-4">
								<select>
									<option value="16"> 2016</option>
									<option value="17"> 2017</option>
									<option value="18"> 2018</option>
									<option value="19"> 2019</option>
									<option value="20"> 2020</option>
									<option value="21"> 2021</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group" id="credit_cards">
						<img src="assets/images/visa.jpg" id="visa">
						<img src="assets/images/mastercard.jpg" id="mastercard">
						<img src="assets/images/amex.jpg" id="amex">
					</div>
					<div class="form-group" id="pay-now">
						<button type="submit" class="btn btn-default" onclick="validateForm()" id="confirm-purchase">Confirm</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function validateForm() {

			let x = document.forms["myForm"]["fname"].value;
			let y = document.forms["myForm"]["cardnum"].value;
			if (x.length < "5") {
				alert("Wrong Name");
				return false;
			}
			if (y.length < "16") {
				alert("Invalid card number");
				return false;
			}
		}
	</script>
	<script src="assets/js/script.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>

	<script src="js/popper.min.js"></script>
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