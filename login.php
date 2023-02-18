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
					Login
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="login.html">Login</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->



<!--<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>-->
<!--<section class="insurence-one-area section-gap">			
	<div class="container">
		<div class="row align-items-center">
		<!<div class="row fullscreen align-items-center justify-content-between">-->
<section class="hot-deal-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<!--<div class="col-lg-6 col-md-6 banner-right">-->
				<div class="tab-content" id="myTabContent">
					<form class="form-wrap" action="connect.php" method="post" enctype="multipart/form-data">

						<!--<form action="/action_page.php">-->


						<h2>Please fill in this form for login.</h2>
						<hr>
						<!---- <label for="name"><b>Name</b></label>
    <input type="text" class="form-control"placeholder="Enter Name" name="name" id="name" required>-->
						<!---- <label for="surname"><b>Surname</b></label>
    <input type="text" class="form-control"placeholder="Enter Surname" name="surname" id="surname" required>
    <label for="phonenmber"><b>Phonenumber</b></label>
    <input type="text" class="form-control"placeholder="Enter Phonenumber" name="phonenumber" id="phonenumber" required>-->

						<label for="email"><b>Email</b></label>
						<input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" class="form-control" placeholder="Enter Password" name="password" id="psw" required>

						<!---- <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>-->
						<hr>
						<p>By loging an account you agree to our <a href="#">Terms & Privacy</a>.</p>

						<button type="submit" name="submit" class="registerbtn">login</button>
						<label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						</label>

						<div class="container signin" style="background-color:#f1f1f1">
							<!--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span><br><br>-->
							<p>If you not registered? <a href="register.php">Create an account...</a>.</p>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>


<!-- Start insurence-one Area -->
<!--<section class="insurence-one-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 insurence-left">
							<img class="img-fluid img-one" src="\travelboss\travelista-master\img\car2.webp" alt="">
						</div>
						<div class="col-lg-6 insurence-right">
							<h6 class="text-uppercase">Need to know</h6>
							<h1>Rental Cars</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
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
			</section>-->
<!-- End insurence-one Area -->

<!-- Start insurence-two Area -->
<!--<section class="insurence-two-area pb-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 insurence-left">
							<h6 class="text-uppercase">Need to know</h6>
							<h1>Self-Drive Cars</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
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
			</section>-->
<!-- End insurence-two Area -->


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