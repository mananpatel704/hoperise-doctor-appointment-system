<?php
    include('common/css.php');
$service_id=$_GET['service_id'];

$select_service=mysqli_query($conn,"select * from hs_service where service_id=$service_id");
$service_row=mysqli_fetch_array($select_service);
    if(isset($_POST['submit']))
   {
    $category_id=$_POST['category_id'];
    $sub_category_id=$_POST['sub_category_id'];
    $service_title=$_POST['service_title'];
    $service_description=$_POST['service_description'];
    // $service_thumb=$_POST['service_thumb'];
    if(!empty($_FILES['service_thumb']['name']))
{
    $path="uploads/";
    $service_thumb_org=$_FILES['service_thumb']['name'];
    $service_thumb_tmp=$_FILES['service_thumb']['tmp_name'];
    $imagepath=$path.$service_thumb_org;
    move_uploaded_file($service_thumb_tmp,$imagepath);
    $query = mysqli_query($conn, "UPDATE hs_service SET category_id=$category_id, sub_category_id=$sub_category_id, service_title='$service_title', service_description='$service_description', service_thumb='$service_thumb_org' WHERE service_id=$service_id");

} else {
    $service_thumb_org = $service_row['service_thumb'];

    $query=mysqli_query($conn,"update hs_service set category_id=$category_id,sub_category_id=$sub_category_id,service_title='$service_title',service_description='$service_description',service_thumb='$service_thumb_org' where service_id=$service_id");
}
    if($query)
    { 
        echo "service Updated";
    }
}
?>
<body class="fixed-navbar">
    <div class="page-wrapper">
    <?php
            include('common/header.php');
        ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php
            include('common/sidebar.php');
        ?>
                <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">service Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">service Form</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">service form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                       <div class="col-sm-12 form-group">
                                            <label>category name</label>
                                            <select class="form-control" name="category_id">
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
                                        <div class="col-sm-12 form-group">
                                            <label>sub_category name</label>
                                            <select class="form-control" name="sub_category_id">
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
                                        <div class="col-sm-12 form-group">
                                            <label>service Title</label>
                                            <input class="form-control" type="text" placeholder="service Title" value="<?php echo $service_row['service_title'];?>" name="service_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>service Desription</label>
                                            <input class="form-control" type="text" placeholder="service desription" value="<?php echo $service_row['service_description'];?>" name="service_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>service Thumb</label>
                                            <input class="form-control" type="file" placeholder="service thumb" value="<?php echo $service_row['service_thumb'];?>" name="service_thumb">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-default" name="submit" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
            <?php
                include('common/footer.php');
            ?>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php
        include('common/configue_panel.php');
    ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <?php
        include('common/preloader.php');
    ?>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
   <?php
    include('common/main_footer.php');
   ?>