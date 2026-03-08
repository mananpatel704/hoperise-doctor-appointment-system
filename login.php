<?php
session_start();
if(isset($_SESSION['patient_id']))
    {
        header("Location:index.php");
    }
$conn=mysqli_connect("localhost","root","","hoperise");
if(isset($_POST['submit']))
{
    $patient_email=$_POST['patient_email'];
    $patient_password=$_POST['patient_password'];
    
    $query=mysqli_query($conn,"SELECT * FROM hs_patient WHERE patient_email='$patient_email' AND patient_password='$patient_password'");
    if(mysqli_num_rows($query)>0)
    {
        $row=mysqli_fetch_array($query);
        $_SESSION['patient_id']=$row['patient_id'];
        $_SESSION['patient_fname']=$row['patient_fname'];
       $_SESSION['patient_email']=$row['patient_email'];
        header("Location:index.php");
    }
    else
    {
        echo "Password Incorrect";
    }   
}

    ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medical | Hoperise medical</title>

  
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
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
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
          
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="" class="row" method="post">
                      
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control main"name="patient_email" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control main" name="patient_password" placeholder="password" required>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one"name="submit" type="submit">login</button>
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



<?php
include("uploads/footer.php");
?>
<?php
include("uploads/main_footer.php");
?>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<?php
include("uploads/js.php");
?>