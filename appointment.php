<?php
    $conn=mysqli_connect("localhost","root","","hoperise");
    
    if(isset($_POST['submit']))
    {
        $patient_id=$_POST['patient_id'];
        $doctor_id=$_POST['doctor_id'];
        $category_id=$_POST['category_id'];
        $sub_category_id=$_POST['sub_category_id'];
        $service_id=$_POST['service_id'];
        $appointment_date=$_POST['appointment_date'];
        $appointment_time=$_POST['appointment_time'];
        $appointment_description=$_POST['appointment_description'];
        $appointment_status=$_POST['appointment_status'];
         $query=mysqli_query($conn,"insert into hs_appointment(patient_id,doctor_id,category_id,sub_category_id,service_id,appointment_date,appointment_time,appointment_description,appointment_status)values($patient_id,$doctor_id,$category_id,$sub_category_id,$service_id,'$appointment_date','$appointment_time','$appointment_description','$appointment_status')");
    }
    ?>

<!DOCTYPE html>
<html>

<?php
include("uploads/main_header.php");
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
            <h1>Appoinment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Appoinment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <form action="" class="row" method="post">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
              <label>patient Id</label>
            <select class="form-control main pt-0 pb-0" name="patient_id">
            <?php
            $patient_data=mysqli_query($conn,"select * from hs_patient");
            while($patient_row=mysqli_fetch_array($patient_data))
             {
             ?>
             <option value="<?php echo $patient_row['patient_id']; ?>"><?php echo $patient_row['patient_fname']; ?></option>
              <?php
             }
             ?>
            </select>
            </div>
        <div class="col-md-12">
              <label>Doctor Id</label>
            <select class="form-control main pt-0 pb-0" name="doctor_id">
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
            <div class="col-md-12">
             <label>category name</label>
              <select class="form-control main pt-0 pb-0" name="category_id">
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
             <div class="col-md-12">
             <label>sub_category name</label>
            <select class="form-control main pt-0 pb-0" name="sub_category_id">
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
                   <div class="col-md-12">
                   <label>Service name</label>
                  <select class="form-control main pt-0 pb-0" name="service_id">
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
                                   
          
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                  
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="date" name="appointment_date" class="form-control main pt-0 pb-0" placeholder="appointment_date" required>
                        </div>
                        <div class="col-md-6">
                            <input type="time" name="appointment_time" class="form-control main pt-0 pb-0" placeholder="appointment_time" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="appointment_description" class="form-control main pt-0 pb-0" placeholder="appointment_description" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                        <select name="appointment_status" class="form-control main pt-0 pb-0">
                           <option value="Accept">Accept</option>
                           <option value="Reject">Reject</option>
                        </select>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one"name="submit" type="submit">Send Message</button>
                        </div>
                  </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================


  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.php">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="about.php">About</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!-footer-main-->
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