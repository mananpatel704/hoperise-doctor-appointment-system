<!DOCTYPE html>
<html>
 <?php
 include("uploads/main_header.php");
 $appointment_id=$_GET['appointment_id'];

 include_once 'paypal_config.php';

 $conn=mysqli_connect("localhost","root","","hoperise");
$sql = mysqli_query($conn,"SELECT * FROM hs_appointment");

    $row=mysqli_fetch_array($sql);
    ?>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<?php
include("uploads/top_header.php");
?>
<!--header top-->

<!--Header Upper-->
<?php

include("uploads/upper_header.php");
?>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
              include("uploads/navbar.php");
            ?>  
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/img-01.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three ">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                <form action="<?php echo PAYPAL_URL; ?>" method="post">
                <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

<!-- Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php echo $row['doctor_id'];?>">
<input type="hidden" name="item_number" value="<?php echo $row['appointment_id'];?>">
<input type="hidden" name="amount" value="<?php echo $row['appointment_payment_status'];?>">
<input type="hidden" name="id" value="<?php echo $row['patient_id'];?>">

<!-- Paypal currency -->
<input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

<!-- Success and cancel URLs -->
<input type='hidden' name='cancel_return' value='<?php echo PAYPAL_CANCEL_URL; ?>'>
<input type='hidden' name='return' value='<?php echo PAYPAL_RETURN_URL; ?>'>

                    <div class="link-btn">    
                    <button class="btn btn-neon"><h2>Pay for Services</h2></button>    
                    <!-- <a href="#" class="btn-style-one">Appoinment</a> -->
                  </div>
</form>
                </div>                      
            </div>
           
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<!--End team section-->

<!--footer-main-->
<?php
include("uploads/footer.php");
?>
<?php
include("uploads/main_footer.php");
?>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<?php
include("uploads/js.php");
?>