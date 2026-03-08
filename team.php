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
<?php
include("uploads/navbar.php");
?>
<!--End Main Header --> 

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/img-01.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Team</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="team-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Great
                        <span>Team</span>
                    </h3>
                    <p>A great team doctor is someone who is well-educated, has a wide range of skills, and is able to provide the best medical care for athletes.<br>They should also be able to build relationships with the entire team, including players, coaches, and family members. </p>
                </div>
                <!-- Nav tabs -->
                
                <div class="tab-content">
                    <!--Start single tab content-->
                    <div class="team-members tab-pane fade in active row" id="doctor">
                    <div class="row">
                     <?php
                            $doctor_query=mysqli_query($conn,"select * from hs_doctor limit 3");
                            $i=1;
                            while($doctor_row=mysqli_fetch_array($doctor_query))
                            {
                            
                                
                            ?>
        
                        <div class="col-md-4 col-sm-6"  id="<?php echo 'service'.$doctor_row['doctor_fname']; ?>">
                            <div class="team-person text-center">
                       
                                <img src="images/team/doctor-1.jpg" class="img-responsive" alt="team">
                                <h6><?php echo $doctor_row['doctor_fname'];?></h6>
                                
                            </div>
                        </div>
                        <?php
                                } 
                                
                            
                            ?>  
                        
                    </div>
                    <!--End single tab content-->
                </div>
            </div>
        </div>
    </div>
</section>

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