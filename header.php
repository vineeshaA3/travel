<?php
include 'db_config.php';
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
    <title>Planet Travel</title>

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
</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                        <!--<ul>
                              <li><a href="#">Visit Us</a></li>
                              <li><a href="#">Buy Tickets</a></li>
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
                    <a href="index.php"><img src="img/logo1.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="hotels.php">Hotels</a></li>
                        <li><a href="insurance.php">Travels</a></li>

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
                        <!--<li><a href="currency.php"></a>-->
                        <li>
                            <label for="to">

                                <select id="country" onchange="myFunction()">
                                    <option value="INR">INR ₹</option>
                                    <option value="USD">USD $</option>
                                    <option value="EUR">EUR €</option>
                                </select>
                            </label>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->