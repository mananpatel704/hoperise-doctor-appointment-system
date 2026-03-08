<!DOCTYPE html>
<html>
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
         $query=mysqli_query($conn,"insert into hs_appointment(patient_id,doctor_id,category_id,sub_category_id,service_id,appointment_date,appointment_time,appointment_description)values($patient_id,$doctor_id,$category_id,$sub_category_id,$service_id,'$appointment_date','$appointment_time','$appointment_description')");
    }
    ?>


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
            <div class="col-md-6 col-sm-12 col-xs-12" style="width: 100%;">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h1><span>My Appointment</span></h>
                    </div>
        
                        <div class="row">
                        <div class="tbl-header" style="background: -webkit-linear-gradient(left, #25c481, #25b7c4);">
    <table cellpadding="0" cellspacing="0" border="0" >
    <thead style="background-color: rgba(255,255,255,0.3);">
                                <tr>
                                 
                                    <th>Patient Id</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Service Name</th>
                                    <th>Doctor Name</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Appointment Description</th>
                                    <th>Appointment Status</th>
                                      <th>Payment</th>     
                                </tr>
                            </thead>
                            

    </table>
  </div>
                    <div class="tbl-content" style="background: -webkit-linear-gradient(left, #25c481, #25b7c4);">
                     <table cellpadding="0" cellspacing="0" border="0">
                         <tfoot style="background-color: rgba(255,255,255,0.3);">
                                <tr>
                                
                                   
                                    <th>Patient Id</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Service Name</th>
                                    <th>Doctor Name</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Appointment Description</th>
                                    <th>Appointment Status</th>
                                    
                                      <th>Payment</th> 
                                    
                                </tr>
                            </tfoot>
                           <tbody>

                                <?php
                                
                                $appoinment_data=mysqli_query($conn,"select * from hs_appointment where patient_id=$_SESSION[patient_id]");
                                while($appoinment_row=mysqli_fetch_array($appoinment_data))
                                {
                                 $patient_data=mysqli_query($conn,"select * from hs_patient where patient_id=$appoinment_row[patient_id]");
                                $patient_row=mysqli_fetch_array($patient_data);

                                $doctor_data=mysqli_query($conn,"select * from hs_doctor where doctor_id=$appoinment_row[doctor_id]");
                                $doctor_row=mysqli_fetch_array($doctor_data);
 
                                $category_data=mysqli_query($conn,"select * from hs_category where category_id=$appoinment_row[category_id]");
                                $category_row=mysqli_fetch_array($category_data);

                                $sub_category_data=mysqli_query($conn,"select * from hs_sub_category where sub_category_id=$appoinment_row[sub_category_id]");
                                $sub_category_row=mysqli_fetch_array($sub_category_data);

                                $service_data=mysqli_query($conn,"select * from hs_service where service_id=$appoinment_row[service_id]");
                                $service_row=mysqli_fetch_array($service_data);
                                ?>
                                <tr>
                                    
                                   
                                    <td><?php echo $patient_row['patient_id'];?></td>
                                    <td><?php echo $category_row['category_title'];?></td>
                                    <td><?php echo $sub_category_row['sub_category_title'];?></td>
                                    <td><?php echo $service_row['service_title'];?></td>
                                    <td><?php echo $doctor_row['doctor_fname']." ".$doctor_row['doctor_lname'];?></td>
                                    <td><?php echo $appoinment_row['appointment_date'];?></td>
                                    <td><?php echo $appoinment_row['appointment_time'];?></td>
                                    <td><?php echo $appoinment_row['appointment_description'];?></td>
                                    <td><?php echo $appoinment_row['appointment_status'];?></td>
                                    <?php
                                    if($appoinment_row['appointment_status']=='Accept')
                                    {
                                        if($appoinment_row['appointment_payment_status']==0)
                                        {
                                      ?>
                                      <td><a href="payment.php?appointment_id=<?php echo $appoinment_row['appointment_id'];?>">payment</a></td> 
                                      <?php
                                    }
                                    else{
                                        ?>
                                        <td><b>Payment Done</b></td>
                                        <?php
                                    }
                                }

                                    ?>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                               
                            </tbody>
                        </table>                            
                            
                        </div>
                    
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