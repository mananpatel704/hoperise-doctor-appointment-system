
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<?php
include('uploads/top_header.php');
?>
<!--header top-->

<!--Header Upper-->
<?php
include('uploads/upper_header.php');
?>
<!--Header Upper-->


<!--Main Header-->
<?php
include('uploads/main_header.php');

$conn=mysqli_connect("localhost","root","","hoperise");
if(isset($_POST['submit']))
{
    $fd_message=$_POST['fd_message'];
    $patient_id=$_SESSION['patient_id'];
   
    
     $query=mysqli_query($conn,"insert into hs_feedback(fd_message,patient_id)values('$fd_message',$patient_id)");
     if($query)
     {
   echo "feedback inserted susscfully";
     }
    }

?>

<!--End Main Header -->
    <?php
	  include('uploads/navbar.php');
	 ?>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/img-01.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>feedback</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>feedback</li>
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
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="" class="row" method="post">
                       
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea rows="15" class="form-control main"name="fd_message" placeholder="Your message"></textarea>
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
=            Google Map            =
=================================-->

<!--====  End of Google Map  ====-->

<!--footer-main-->
<?php
include('uploads/main_footer.php')
?>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>
<?php
include('uploads/footer.php');
?>