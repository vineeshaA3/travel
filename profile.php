<?php
include 'db_config.php';
session_start();
include 'header.php';
$sql = "SELECT * FROM `users`";
$insert =   $conn->query($sql);
$count = $insert->num_rows;

?>
<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Profile
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="profile.php"> profile</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<?php

$query = mysqli_query($conn, "SELECT id,name, surname, email,phonenumber,password FROM `users` WHERE id='" . $_SESSION['uid'] . "'");
while ($row = mysqli_fetch_array($query)) {

?>

    <section class="hot-deal-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <!--<div class="col-lg-6 col-md-6 banner-right">-->
                    <div class="tab-content" id="myTabContent">

                        <table border='1px' width='480px' cellpadding='15px' cellspacing='3px' align='center'>
                            <form class="form-wrap" action="" method="POST" enctype="multipart/form-data">
                                <h2>
                                    <center>Your Profile</center>
                                </h2><br><br>
                                <!-- <div class="row">
                                <div class="col-md-12">
                                   <tr> <div class="form-group">
                                       <td> <label>Image</label></td>
                                          <td>  <input type="file" class="form-control" name="image" value=""></td>
                                    </div></tr>
                                </div>
                            </div>
                           <tr> <div>
                          
                              <td>  <input type="hidden" name="oldimage" value="<?php echo $row['image']; ?>"></td>
                              <td><img style="height:80px; width:80px" src="<?php echo $row['image']; ?>"></td>
                            </div></tr>
                        <!-- pdf 
                            <div class="row">
                                <div class="col-md-12">
                                <tr> <div class="form-group">
                                    <td>  <label>Pdf</label></td>
                                    <td> <input type="file" class="form-control" name="pdf" value=""></td>
                                    </div></tr>
                                </div>
                            </div>
                            <tr> <div>
                            
                            <td><input type="hidden" name="oldpdf" value="<?php echo $row['pdf']; ?>"></td>
                            <td>  <a href="<?php echo $row['pdf']; ?>"></a></td>
                            </div></tr>-->

                                <tr>
                                    <div clss="form-group">
                                        <td><label>firstname</label></td>
                                        <td> <input type="text" class="form-control" name="firstname" value="<?php echo $row['name']; ?>"></td>
                                    </div>
                                </tr>

                                <tr>
                                    <div clss="form-group">
                                        <td> <label>surname</label></td>
                                        <td> <input type="text" class="form-control" name="surname" value="<?php echo $row['surname']; ?>"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div clss="form-group">
                                        <td> <label>phonenumber</label></td>
                                        <td> <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber']; ?>"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div clss="form-group">
                                        <td> <label>password</label></td>
                                        <td> <input type="text" id="myInput" class="form-control" name="password" value="<?php echo $row['password']; ?>"></td>

                                    </div>
                                </tr>
                                <tr>
                                    <div clss="form-group">
                                        <td> <label>email</label></td>
                                        <td> <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"></td>
                                    </div>
                                </tr>
                        </table>
                    <?php } ?>
                    <!--<table border='1px' width='480px' cellpadding='15px' cellspacing='3px' align='center'>
                         <tr><td align='center'>   <button type="submit" name="submit" class="btn btn-dark pull-right"style="color:blue;text-align:center;">Update</button></div></td></tr></table>
                            <div class="clearfix"> -->

                    </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    </body>

    </html>