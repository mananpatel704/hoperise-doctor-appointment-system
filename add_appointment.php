<!DOCTYPE html>
<html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","hoperise");
if(!isset($_SESSION['patient_id']))
    {
        header("Location:login.php");
    }
?>
<?php
include("uploads/main_header.php");
?>
<?php
$conn=mysqli_connect("localhost","root","","hoperise");
if(isset($_POST['submit']))
    {
        $patient_id=$_SESSION['patient_id'];
        $doctor_id=$_POST['doctor_id'];
        $category_id=$_POST['category_id'];
        $sub_category_id=$_POST['sub_category_id'];
        $service_id=$_POST['service_id'];
        $appointment_date=$_POST['appointment_date'];
        $appointment_time=$_POST['appointment_time'];
        $appointment_description=$_POST['appointment_description'];
         $query=mysqli_query($conn,"insert into hs_appointment(patient_id,doctor_id,category_id,sub_category_id,service_id,appointment_date,appointment_time,appointment_description)values($patient_id,$doctor_id,$category_id,$sub_category_id,$service_id,'$appointment_date','$appointment_time','$appointment_description')");
    }
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
<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3>Request <span>Appointment</span></h3>
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <select  name="doctor_id" placeholder="doctor id" required="">
                                    <?php
                                   $doctor_data=mysqli_query($conn,"select * from hs_doctor");
                                   while($doctor_row=mysqli_fetch_array($doctor_data))
                                {
                                 ?>
                                 <option value="<?php echo $doctor_row['doctor_id']; ?>"><?php echo $doctor_row['doctor_fname']; ?></option>
                                 <?php
                                    }
                                 ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <select name="category_id" placeholder="category id" required="">
                                    <?php
                                  $category_data=mysqli_query($conn,"select * from hs_category");
                                  while($category_row=mysqli_fetch_array($category_data))
                                {
                                 ?>
                                 <option value="<?php echo $category_row['category_id']; ?>"><?php echo $category_row['category_title']; ?></option>
                                 <?php
                                    }
                                 ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <select name="sub_category_id" placeholder="sub category id" required="">
                                    <?php
                                  $category_data=mysqli_query($conn,"select * from hs_sub_category");
                                  while($category_row=mysqli_fetch_array($category_data))
                                {
                                 ?>
                                  <option value="<?php echo $category_row['sub_category_id']; ?>"><?php echo $category_row['sub_category_title']; ?></option>
                                 <?php
                                    }
                                 ?>
                                </select>
                                </div>
                                                           
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <select name="service_id" placeholder="service id" required="">
                                    <?php
                                 $service_data=mysqli_query($conn,"select * from hs_service");
                                 while($service_row=mysqli_fetch_array($service_data))
                                {
                                 ?>
                                 <option value="<?php echo $service_row['service_id']; ?>"><?php echo $service_row['service_title']; ?></option>
                                 <?php
                                    }
                                 ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="appointment_date" placeholder="appointment date" required="" id="datepicker">
                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                </div> 
                                <div class="form-group">
                                    <input type="time" name="appointment_time" placeholder="appointment time" required="" id="datepicker">
                                    
                                </div> 
                                                         
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="appointment_description" placeholder="appointment description" required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button name="submit" type="submit" class="btn-style-one">submit</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>                      
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="appointment-image-holder">
                    <figure>
                        <img src="images/background/appoinment.jpg" alt="Appointment">
                    </figure>
                </div>                       
            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p>Meet our dedicated team of skilled medical professionals delivering exceptional healthcare across various specialties. 
                <br>From primary care to specialized surgery, each member brings expertise and compassion to patient care.</p>
        </div>
        <div class="row">
        <?php
                            $doctor_query=mysqli_query($conn,"select * from hs_doctor limit 3");
                            $i=1;
                            while($doctor_row=mysqli_fetch_array($doctor_query))
                            {
                            
                                
                            ?>
            
            <div class="col-md-4 col-sm-6 col-xs-12" id="<?php echo 'service'.$doctor_row['doctor_fname']; ?>">
                <div class="team-member">
                    <img src="images/team/doctor_img.webp" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4><?php echo $doctor_row['doctor_fname'];?></h4>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
                </div>
                <?php
                                } 
                                
                            
                            ?>         
                            
                </div>
    </div>
</section>
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